<?php

declare(strict_types=1);

namespace Lark\Api\Pay\PaidScope;

use Lark\Request\RestRequest;

/**
 * 查询用户是否在应用开通范围
 *
 * @see https://feishu.apifox.cn/api-9020866
 */
final class PayV1PaidScopeCheckUser extends RestRequest
{
    protected string $apiUri = '/open-apis/pay/v1/paid_scope/check_user';

    protected string $httpMethod = 'GET';
}
