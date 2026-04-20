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

namespace Lark\Tests\Integration\Auth;

use GuzzleHttp\Client as GuzzleClient;
use Lark\Core\Config;
use Lark\LarkClient;
use Lark\Tests\Fixtures\TestConfigFactory;
use Nyholm\Psr7\Factory\Psr17Factory;
use PHPUnit\Framework\TestCase;

final class TenantAccessTokenIntegrationTest extends TestCase
{
    public function testCreateReturnsTenantAccessTokenFromRealApi(): void
    {
        if (!TestConfigFactory::hasAppCredentials()) {
            self::markTestSkipped('Missing integration envs: LARK_TEST_APP_ID, LARK_TEST_APP_SECRET');
        }

        $factory = new Psr17Factory();
        $client = new LarkClient(
            new Config(
                appId: TestConfigFactory::appId(),
                appSecret: TestConfigFactory::appSecret(),
                baseUri: TestConfigFactory::baseUri(),
                userAgent: TestConfigFactory::userAgent(),
            ),
            new GuzzleClient(),
            $factory,
            $factory
        );

        $response = $client->auth()->tenantAccessToken()->create();

        self::assertIsArray($response);
        self::assertArrayHasKey('tenant_access_token', $response);
        self::assertIsString($response['tenant_access_token']);
        self::assertNotSame('', trim($response['tenant_access_token']));
    }
}
