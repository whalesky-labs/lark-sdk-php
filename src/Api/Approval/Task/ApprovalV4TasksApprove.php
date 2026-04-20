<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Task;

use Lark\Request\RestRequest;

/**
 * 同意审批任务
 *
 * @see https://feishu.apifox.cn/api-59911363
 */
final class ApprovalV4TasksApprove extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/tasks/approve';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
