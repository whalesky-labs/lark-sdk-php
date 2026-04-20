<?php

declare(strict_types=1);

namespace Lark\Api\Wiki\Task;

use Lark\Request\RestRequest;

/**
 * 获取任务结果
 *
 * @see https://feishu.apifox.cn/api-10854730
 */
final class WikiV2TasksTaskId extends RestRequest
{
    protected string $apiUri = '/open-apis/wiki/v2/tasks/:task_id';

    protected string $httpMethod = 'GET';
}
