<?php

declare(strict_types=1);

namespace Lark\Api\Admin\Badge;

use Lark\Request\RestRequest;

/**
 * 获取授予名单列表
 *
 * @see https://feishu.apifox.cn/api-60287848
 */
final class AdminV1BadgesBadgeIdGrantsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/admin/v1/badges/:badge_id/grants';

    protected string $httpMethod = 'GET';
}
