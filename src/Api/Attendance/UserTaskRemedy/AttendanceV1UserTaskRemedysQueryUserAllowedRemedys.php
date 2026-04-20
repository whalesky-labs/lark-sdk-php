<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserTaskRemedy;

use Lark\Request\RestRequest;

/**
 * 获取可补卡时间
 *
 * @see https://feishu.apifox.cn/api-9020790
 */
final class AttendanceV1UserTaskRemedysQueryUserAllowedRemedys extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_task_remedys/query_user_allowed_remedys';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
