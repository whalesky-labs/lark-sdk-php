<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 获取关注者列表
 *
 * @see https://feishu.apifox.cn/api-9020762
 */
final class TaskV1TasksTaskIdFollowersGet extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/followers';

    protected string $httpMethod = 'GET';
}
