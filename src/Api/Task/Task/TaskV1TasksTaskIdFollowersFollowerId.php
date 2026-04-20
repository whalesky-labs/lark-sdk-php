<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 删除指定关注人
 *
 * @see https://feishu.apifox.cn/api-9020761
 */
final class TaskV1TasksTaskIdFollowersFollowerId extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/followers/:follower_id';

    protected string $httpMethod = 'DELETE';
}
