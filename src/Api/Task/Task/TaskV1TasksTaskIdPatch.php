<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 更新任务
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/task-v1/markdown-module
 */
final class TaskV1TasksTaskIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
