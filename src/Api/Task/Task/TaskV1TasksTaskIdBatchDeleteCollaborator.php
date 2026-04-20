<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 批量删除执行者
 *
 * @see https://feishu.apifox.cn/api-60044079
 */
final class TaskV1TasksTaskIdBatchDeleteCollaborator extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/batch_delete_collaborator';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
