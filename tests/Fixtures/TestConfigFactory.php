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

namespace Lark\Tests\Fixtures;

final class TestConfigFactory
{
    public static function hasAppCredentials(): bool
    {
        return self::nullableEnv('LARK_TEST_APP_ID') !== null
            && self::nullableEnv('LARK_TEST_APP_SECRET') !== null;
    }

    public static function appId(): string
    {
        return self::env('LARK_TEST_APP_ID', 'cli_test_app_id');
    }

    public static function appSecret(): string
    {
        return self::env('LARK_TEST_APP_SECRET', 'test_app_secret');
    }

    public static function accessToken(): ?string
    {
        return self::nullableEnv('LARK_TEST_ACCESS_TOKEN');
    }

    public static function baseUri(): string
    {
        return self::env('LARK_TEST_BASE_URI', 'https://open.feishu.cn');
    }

    public static function userAgent(): string
    {
        return self::env('LARK_TEST_USER_AGENT', 'lark-sdk-php/test');
    }

    private static function env(string $key, string $default): string
    {
        return self::nullableEnv($key) ?? $default;
    }

    private static function nullableEnv(string $key): ?string
    {
        $value = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key) ?: null;

        if (!is_string($value)) {
            return null;
        }

        $value = trim($value);

        return $value === '' ? null : $value;
    }
}
