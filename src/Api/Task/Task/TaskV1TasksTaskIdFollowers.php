<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 新增关注者
 *
 * @see https://feishu.apifox.cn/api-9020760
 */
final class TaskV1TasksTaskIdFollowers extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/followers';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
