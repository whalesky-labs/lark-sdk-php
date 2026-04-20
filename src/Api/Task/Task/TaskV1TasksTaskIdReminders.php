<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 新增提醒时间
 *
 * @see https://feishu.apifox.cn/api-9020763
 */
final class TaskV1TasksTaskIdReminders extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/reminders';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
