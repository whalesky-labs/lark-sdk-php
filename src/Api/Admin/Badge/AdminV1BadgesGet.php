<?php

declare(strict_types=1);

namespace Lark\Api\Admin\Badge;

use Lark\Request\RestRequest;

/**
 * 获取勋章列表
 *
 * @see https://feishu.apifox.cn/api-60285628
 */
final class AdminV1BadgesGet extends RestRequest
{
    protected string $apiUri = '/open-apis/admin/v1/badges';

    protected string $httpMethod = 'GET';
}
