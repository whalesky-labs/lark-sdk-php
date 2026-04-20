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

namespace Lark\Tests\Unit\Auth;

use Lark\Core\Config;
use Lark\LarkClient;
use Lark\Tests\Support\MockHttpClient;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class AppAccessTokenResourceTest extends TestCase
{
    public function testCreateUsesConfigCredentialsWhenPayloadIsEmpty(): void
    {
        $httpClient = new MockHttpClient(function ($request): Response {
            self::assertSame('POST', $request->getMethod());
            self::assertSame('/open-apis/auth/v3/app_access_token/internal', $request->getUri()->getPath());

            $payload = json_decode((string) $request->getBody(), true, flags: JSON_THROW_ON_ERROR);

            self::assertSame([
                'app_id' => 'cli_xxx',
                'app_secret' => 'secret_xxx',
            ], $payload);

            return new Response(
                200,
                ['Content-Type' => 'application/json'],
                json_encode(['code' => 0, 'app_access_token' => 'app_token'], JSON_THROW_ON_ERROR)
            );
        });

        $factory = new Psr17Factory();
        $client = new LarkClient(
            new Config(appId: 'cli_xxx', appSecret: 'secret_xxx'),
            $httpClient,
            $factory,
            $factory
        );

        $result = $client->auth()->appAccessToken()->create();

        self::assertSame('app_token', $result['app_access_token']);
    }

    public function testCreateKeepsExplicitPayloadUntouched(): void
    {
        $httpClient = new MockHttpClient(function ($request): Response {
            $payload = json_decode((string) $request->getBody(), true, flags: JSON_THROW_ON_ERROR);

            self::assertSame([
                'app_id' => 'cli_custom',
                'app_secret' => 'secret_custom',
            ], $payload);

            return new Response(
                200,
                ['Content-Type' => 'application/json'],
                json_encode(['code' => 0, 'app_access_token' => 'app_token'], JSON_THROW_ON_ERROR)
            );
        });

        $factory = new Psr17Factory();
        $client = new LarkClient(
            new Config(appId: 'cli_xxx', appSecret: 'secret_xxx'),
            $httpClient,
            $factory,
            $factory
        );

        $client->auth()->appAccessToken()->create([
            'app_id' => 'cli_custom',
            'app_secret' => 'secret_custom',
        ]);

        self::assertCount(1, $httpClient->requests());
    }
}
