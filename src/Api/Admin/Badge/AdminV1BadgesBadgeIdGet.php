<?php

declare(strict_types=1);

namespace Lark\Api\Admin\Badge;

use Lark\Request\RestRequest;

/**
 * 获取勋章详情
 *
 * @see https://feishu.apifox.cn/api-60285842
 */
final class AdminV1BadgesBadgeIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/admin/v1/badges/:badge_id';

    protected string $httpMethod = 'GET';
}
