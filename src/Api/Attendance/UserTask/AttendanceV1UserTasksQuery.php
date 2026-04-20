<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserTask;

use Lark\Request\RestRequest;

/**
 * 获取打卡结果
 *
 * @see https://feishu.apifox.cn/api-9020782
 */
final class AttendanceV1UserTasksQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_tasks/query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
