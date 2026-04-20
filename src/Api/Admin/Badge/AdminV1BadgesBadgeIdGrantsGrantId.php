<?php

declare(strict_types=1);

namespace Lark\Api\Admin\Badge;

use Lark\Request\RestRequest;

/**
 * 删除授予名单
 *
 * @see https://feishu.apifox.cn/api-60286297
 */
final class AdminV1BadgesBadgeIdGrantsGrantId extends RestRequest
{
    protected string $apiUri = '/open-apis/admin/v1/badges/:badge_id/grants/:grant_id';

    protected string $httpMethod = 'DELETE';
}
