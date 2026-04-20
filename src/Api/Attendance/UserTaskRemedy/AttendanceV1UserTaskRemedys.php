<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserTaskRemedy;

use Lark\Request\RestRequest;

/**
 * 通知补卡审批发起
 *
 * @see https://feishu.apifox.cn/api-9020791
 */
final class AttendanceV1UserTaskRemedys extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_task_remedys';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
