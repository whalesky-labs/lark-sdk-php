<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 查询提醒时间列表
 *
 * @see https://feishu.apifox.cn/api-9020765
 */
final class TaskV1TasksTaskIdRemindersGet extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/reminders';

    protected string $httpMethod = 'GET';
}
