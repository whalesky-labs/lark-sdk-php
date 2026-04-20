<?php

declare(strict_types=1);

namespace Lark\Api\Admin\Badge;

use Lark\Request\RestRequest;

/**
 * 创建授予名单
 *
 * @see https://feishu.apifox.cn/api-60286225
 */
final class AdminV1BadgesBadgeIdGrants extends RestRequest
{
    protected string $apiUri = '/open-apis/admin/v1/badges/:badge_id/grants';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
