<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserTaskRemedy;

use Lark\Request\RestRequest;

/**
 * 获取补卡记录
 *
 * @see https://feishu.apifox.cn/api-9020786
 */
final class AttendanceV1UserTaskRemedysQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_task_remedys/query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
