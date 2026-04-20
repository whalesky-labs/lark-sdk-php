<?php

declare(strict_types=1);

namespace Lark\Tests;

use Lark\Core\Config;
use Lark\Core\Exception\ApiException;
use Lark\LarkClient;
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
            self::assertSame('application/json', $request->getHeaderLine('Content-Type'));

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
