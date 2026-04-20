<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 删除任务
 *
 * @see https://feishu.apifox.cn/api-9020770
 */
final class TaskV1TasksTaskId extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id';

    protected string $httpMethod = 'DELETE';
}
