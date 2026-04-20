<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Task;

use Lark\Request\RestRequest;

/**
 * 转交审批任务
 *
 * @see https://feishu.apifox.cn/api-59912586
 */
final class ApprovalV4TasksTransfer extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/tasks/transfer';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
