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

namespace Lark\Tests\Unit\Core;

use Lark\Core\Config;
use PHPUnit\Framework\TestCase;

final class ConfigTest extends TestCase
{
    public function testConfigUsesOfficialDefaults(): void
    {
        $config = new Config(
            appId: 'cli_xxx',
            appSecret: 'secret_xxx'
        );

        self::assertSame('cli_xxx', $config->appId());
        self::assertSame('secret_xxx', $config->appSecret());
        self::assertSame('https://open.feishu.cn', $config->baseUri());
        self::assertNull($config->defaultAccessToken());
        self::assertSame('lark-sdk-php/dev', $config->userAgent());
    }

    public function testBaseUriIsTrimmed(): void
    {
        $config = new Config(
            appId: 'cli_xxx',
            appSecret: 'secret_xxx',
            baseUri: 'https://open.feishu.cn/'
        );

        self::assertSame('https://open.feishu.cn', $config->baseUri());
    }

    public function testConfigAcceptsDefaultAccessTokenAndCustomUserAgent(): void
    {
        $config = new Config(
            appId: 'cli_xxx',
            appSecret: 'secret_xxx',
            defaultAccessToken: 'token_xxx',
            userAgent: 'custom-agent/1.0'
        );

        self::assertSame('token_xxx', $config->defaultAccessToken());
        self::assertSame('custom-agent/1.0', $config->userAgent());
    }
}
