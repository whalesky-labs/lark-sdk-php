<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 创建评论
 *
 * @see https://feishu.apifox.cn/api-11185464
 */
final class TaskV1TasksTaskIdCommentsPost extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/comments';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
