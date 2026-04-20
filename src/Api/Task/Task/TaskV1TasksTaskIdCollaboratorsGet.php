<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 获取执行者列表
 *
 * @see https://feishu.apifox.cn/api-9020759
 */
final class TaskV1TasksTaskIdCollaboratorsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/collaborators';

    protected string $httpMethod = 'GET';
}
