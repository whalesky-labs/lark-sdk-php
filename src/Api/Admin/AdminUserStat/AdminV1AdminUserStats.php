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

namespace Lark\Api\Admin\AdminUserStat;

use Lark\Request\RestRequest;

/**
 * 获取用户维度的用户活跃和功能使用数据
 *
 * @see https://feishu.apifox.cn/api-9020730
 */
final class AdminV1AdminUserStats extends RestRequest
{
    protected string $apiUri = '/open-apis/admin/v1/admin_user_stats';

    protected string $httpMethod = 'GET';
}
