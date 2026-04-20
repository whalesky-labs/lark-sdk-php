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

namespace Lark\Api\Attendance\UserApproval;

use Lark\Request\RestRequest;

/**
 * 获取用户审批通过数据
 *
 * @see https://feishu.apifox.cn/api-9020788
 */
final class AttendanceV1UserApprovalsQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_approvals/query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
