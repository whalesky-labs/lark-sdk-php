<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 取消完成任务
 *
 * @see https://feishu.apifox.cn/api-9020769
 */
final class TaskV1TasksTaskIdUncomplete extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/uncomplete';

    protected string $httpMethod = 'POST';
}
