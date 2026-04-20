<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

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
