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

    public static function userId(): ?string
    {
        return self::nullableEnv('LARK_TEST_USER_ID');
    }

    public static function openId(): ?string
    {
        return self::nullableEnv('LARK_TEST_OPEN_ID');
    }

    public static function email(): ?string
    {
        return self::nullableEnv('LARK_TEST_EMAIL');
    }

    public static function mobile(): ?string
    {
        return self::nullableEnv('LARK_TEST_MOBILE');
    }

    public static function departmentId(): ?string
    {
        return self::nullableEnv('LARK_TEST_DEPARTMENT_ID');
    }

    public static function chatId(): ?string
    {
        return self::nullableEnv('LARK_TEST_CHAT_ID');
    }

    public static function messageId(): ?string
    {
        return self::nullableEnv('LARK_TEST_MESSAGE_ID');
    }

    public static function calendarId(): ?string
    {
        return self::nullableEnv('LARK_TEST_CALENDAR_ID');
    }

    public static function fileToken(): ?string
    {
        return self::nullableEnv('LARK_TEST_FILE_TOKEN');
    }

    public static function sheetToken(): ?string
    {
        return self::nullableEnv('LARK_TEST_SHEET_TOKEN');
    }

    public static function docToken(): ?string
    {
        return self::nullableEnv('LARK_TEST_DOC_TOKEN');
    }

    public static function wikiNodeToken(): ?string
    {
        return self::nullableEnv('LARK_TEST_WIKI_NODE_TOKEN');
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
