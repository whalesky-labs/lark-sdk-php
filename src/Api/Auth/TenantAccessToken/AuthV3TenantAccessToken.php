<?php

declare(strict_types=1);

namespace Lark\Api\Auth\TenantAccessToken;

use Lark\Request\RestRequest;

/**
 * 商店应用获取 tenant_access_token
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN
 */
final class AuthV3TenantAccessToken extends RestRequest
{
    protected string $apiUri = '/open-apis/auth/v3/tenant_access_token';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
