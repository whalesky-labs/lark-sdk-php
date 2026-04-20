<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 删除提醒时间
 *
 * @see https://feishu.apifox.cn/api-9020764
 */
final class TaskV1TasksTaskIdRemindersReminderId extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/reminders/:reminder_id';

    protected string $httpMethod = 'DELETE';
}
