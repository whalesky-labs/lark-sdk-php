<?php

declare(strict_types=1);

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
