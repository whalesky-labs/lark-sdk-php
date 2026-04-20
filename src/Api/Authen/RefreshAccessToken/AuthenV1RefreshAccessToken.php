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

namespace Lark\Api\Authen\RefreshAccessToken;

use Lark\Request\RestRequest;

/**
 * 刷新 user_access_token
 *
 * @see https://feishu.apifox.cn/api-58161503
 */
final class AuthenV1RefreshAccessToken extends RestRequest
{
    protected string $apiUri = '/open-apis/authen/v1/refresh_access_token';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
