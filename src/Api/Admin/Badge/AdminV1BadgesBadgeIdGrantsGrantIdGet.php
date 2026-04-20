<?php

declare(strict_types=1);

namespace Lark\Api\Admin\Badge;

use Lark\Request\RestRequest;

/**
 * 获取授予名单详情
 *
 * @see https://feishu.apifox.cn/api-60287858
 */
final class AdminV1BadgesBadgeIdGrantsGrantIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/admin/v1/badges/:badge_id/grants/:grant_id';

    protected string $httpMethod = 'GET';
}
