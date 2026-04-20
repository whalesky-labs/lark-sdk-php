<?php

declare(strict_types=1);

namespace Lark\Api\Tenant\Tenant;

use Lark\Request\RestRequest;

/**
 * 获取企业信息
 *
 * @see https://feishu.apifox.cn/api-60206610
 */
final class TenantV2TenantQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/tenant/v2/tenant/query';

    protected string $httpMethod = 'GET';
}
