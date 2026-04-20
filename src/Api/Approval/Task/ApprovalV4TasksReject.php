<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Task;

use Lark\Request\RestRequest;

/**
 * 拒绝审批任务
 *
 * @see https://feishu.apifox.cn/api-59912215
 */
final class ApprovalV4TasksReject extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/tasks/reject';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
