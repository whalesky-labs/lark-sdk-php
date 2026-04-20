<?php

declare(strict_types=1);

namespace Lark\Api\Auth\AppAccessToken;

use Lark\Request\RestRequest;

/**
 * 自建应用获取 app_access_token
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ukDNz4SO0MjL5QzM/auth-v3/auth/app_access_token_internal
 */
final class AuthV3AppAccessTokenInternal extends RestRequest
{
    protected string $apiUri = '/open-apis/auth/v3/app_access_token/internal';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
