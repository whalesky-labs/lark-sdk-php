<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

namespace Lark\Tests\Unit;

use Lark\Core\Config;
use Lark\Core\Exception\ApiException;
use Lark\LarkClient;
use Lark\Request\RestRequest;
use Lark\Tests\Support\MockHttpClient;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class LarkClientTest extends TestCase
{
    public function testTenantAccessTokenUsesConfigCredentialsWhenPayloadIsEmpty(): void
    {
        $httpClient = new MockHttpClient(function ($request): Response {
            self::assertSame('POST', $request->getMethod());
            self::assertSame('/open-apis/auth/v3/tenant_access_token/internal', $request->getUri()->getPath());
            self::assertSame('application/json; charset=utf-8', $request->getHeaderLine('Content-Type'));

            $payload = json_decode((string) $request->getBody(), true, flags: JSON_THROW_ON_ERROR);

            self::assertSame([
                'app_id' => 'cli_xxx',
                'app_secret' => 'secret_xxx',
            ], $payload);

            return new Response(
                200,
                ['Content-Type' => 'application/json'],
                json_encode(['code' => 0, 'msg' => 'success', 'tenant_access_token' => 'tenant_token'], JSON_THROW_ON_ERROR)
            );
        });

        $factory = new Psr17Factory();
        $client = new LarkClient(
            new Config(appId: 'cli_xxx', appSecret: 'secret_xxx'),
            $httpClient,
            $factory,
            $factory
        );

        $result = $client->auth()->tenantAccessToken()->create();

        self::assertSame('tenant_token', $result['tenant_access_token']);
    }

    public function testRequestInjectsBearerToken(): void
    {
        $httpClient = new MockHttpClient(function ($request): Response {
            self::assertSame('Bearer user_token', $request->getHeaderLine('Authorization'));

            return new Response(
                200,
                ['Content-Type' => 'application/json'],
                json_encode(['code' => 0, 'msg' => 'success'], JSON_THROW_ON_ERROR)
            );
        });

        $factory = new Psr17Factory();
        $client = new LarkClient(
            new Config(appId: 'cli_xxx', appSecret: 'secret_xxx', defaultAccessToken: 'user_token'),
            $httpClient,
            $factory,
            $factory
        );

        $result = $client->request('GET', '/open-apis/im/v1/messages');

        self::assertSame(0, $result['code']);
    }

    public function testSendPassesPathParamsQueryAndPayloadToRequest(): void
    {
        $httpClient = new MockHttpClient(function ($request): Response {
            self::assertSame(
                'https://open.feishu.cn/open-apis/contact/v3/users/ou_xxx?department_id=0',
                (string) $request->getUri()
            );
            self::assertSame('PATCH', $request->getMethod());
            self::assertSame('application/json; charset=utf-8', $request->getHeaderLine('Content-Type'));

            $payload = json_decode((string) $request->getBody(), true, flags: JSON_THROW_ON_ERROR);
            self::assertSame(['name' => 'updated-name'], $payload);

            return new Response(
                200,
                ['Content-Type' => 'application/json'],
                json_encode(['code' => 0, 'data' => ['user_id' => 'ou_xxx']], JSON_THROW_ON_ERROR)
            );
        });

        $factory = new Psr17Factory();
        $client = new LarkClient(
            new Config(appId: 'cli_xxx', appSecret: 'secret_xxx'),
            $httpClient,
            $factory,
            $factory
        );

        $request = new class () extends RestRequest {
            protected string $apiUri = '/open-apis/contact/v3/users/:user_id';

            protected string $httpMethod = 'PATCH';

            protected array $headers = [
                'Content-Type' => 'application/json; charset=utf-8',
            ];
        };

        $result = $client->send(
            $request,
            pathParams: ['user_id' => 'ou_xxx'],
            query: ['department_id' => '0'],
            payload: ['name' => 'updated-name']
        );

        self::assertSame('ou_xxx', $result['data']['user_id']);
    }

    public function testApiErrorThrowsApiException(): void
    {
        $httpClient = new MockHttpClient(fn () => new Response(
            200,
            ['Content-Type' => 'application/json'],
            json_encode(['code' => 99991663, 'msg' => 'invalid tenant access token'], JSON_THROW_ON_ERROR)
        ));

        $factory = new Psr17Factory();
        $client = new LarkClient(
            new Config(appId: 'cli_xxx', appSecret: 'secret_xxx'),
            $httpClient,
            $factory,
            $factory
        );

        $this->expectException(ApiException::class);
        $this->expectExceptionMessage('invalid tenant access token');

        $client->request('GET', '/open-apis/im/v1/messages');
    }
}
