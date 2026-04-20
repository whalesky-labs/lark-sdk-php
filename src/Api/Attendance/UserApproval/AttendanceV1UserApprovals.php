<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserApproval;

use Lark\Request\RestRequest;

/**
 * 写入审批结果
 *
 * @see https://feishu.apifox.cn/api-9020789
 */
final class AttendanceV1UserApprovals extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_approvals';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
