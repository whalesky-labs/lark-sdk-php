<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 获取评论列表
 *
 * @see https://feishu.apifox.cn/api-60036593
 */
final class TaskV1TasksTaskIdComments extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/comments';

    protected string $httpMethod = 'GET';
}
