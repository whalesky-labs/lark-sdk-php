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

namespace Lark\Api\Admin\AdminDeptStat;

use Lark\Request\RestRequest;

/**
 * 获取部门维度的用户活跃和功能使用数据
 *
 * @see https://feishu.apifox.cn/api-60281703
 */
final class AdminV1AdminDeptStats extends RestRequest
{
    protected string $apiUri = '/open-apis/admin/v1/admin_dept_stats';

    protected string $httpMethod = 'GET';
}
