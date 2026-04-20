<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Task;

use Lark\Request\RestRequest;

/**
 * 重新提交审批任务
 *
 * @see https://feishu.apifox.cn/api-59917604
 */
final class ApprovalV4TasksResubmit extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/tasks/resubmit';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
