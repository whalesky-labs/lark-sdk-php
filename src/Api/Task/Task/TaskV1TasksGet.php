<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 查询所有任务
 *
 * @see https://feishu.apifox.cn/api-11180179
 */
final class TaskV1TasksGet extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks';

    protected string $httpMethod = 'GET';
}
