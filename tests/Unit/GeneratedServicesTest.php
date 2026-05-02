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
use Lark\LarkClient;
use Lark\Services\Contact\UserResource;
use Lark\Services\Im\MessageResource;
use Lark\Tests\Support\MockHttpClient;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class GeneratedServicesTest extends TestCase
{
    public function testClientExposesGeneratedServices(): void
    {
        $client = $this->makeClient(new MockHttpClient(
            fn () => new Response(200, ['Content-Type' => 'application/json'], '{"code":0}')
        ));

        self::assertInstanceOf(UserResource::class, $client->contact()->user());
        self::assertInstanceOf(MessageResource::class, $client->im()->message());
        self::assertTrue(method_exists($client, 'drive'));
        self::assertTrue(method_exists($client, 'calendar'));
    }

    public function testGeneratedResourceUsesRequestDefinition(): void
    {
        $httpClient = new MockHttpClient(function ($request): Response {
            self::assertSame('GET', $request->getMethod());
            self::assertSame('/open-apis/contact/v3/users/ou_test', $request->getUri()->getPath());
            self::assertSame('department_id=0', $request->getUri()->getQuery());
            self::assertSame('Bearer tenant_token', $request->getHeaderLine('Authorization'));

            return new Response(
                200,
                ['Content-Type' => 'application/json'],
                json_encode(['code' => 0, 'data' => ['user_id' => 'ou_test']], JSON_THROW_ON_ERROR)
            );
        });

        $client = $this->makeClient($httpClient);

        $response = $client->contact()->user()->get(
            pathParams: ['user_id' => 'ou_test'],
            query: ['department_id' => '0'],
            accessToken: 'tenant_token'
        );

        self::assertSame('ou_test', $response['data']['user_id']);
    }

    private function makeClient(MockHttpClient $httpClient): LarkClient
    {
        $factory = new Psr17Factory();

        return new LarkClient(
            new Config(appId: 'cli_xxx', appSecret: 'secret_xxx'),
            $httpClient,
            $factory,
            $factory
        );
    }
}
