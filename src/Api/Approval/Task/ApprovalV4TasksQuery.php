<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Task;

use Lark\Request\RestRequest;

/**
 * 查询用户的任务列表
 *
 * @see https://feishu.apifox.cn/api-59949572
 */
final class ApprovalV4TasksQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/tasks/query';

    protected string $httpMethod = 'GET';
}
