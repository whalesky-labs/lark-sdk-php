<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Instance;

use Lark\Request\RestRequest;

/**
 * 退回审批任务
 *
 * @see https://feishu.apifox.cn/api-59912841
 */
final class ApprovalV4InstancesSpecifiedRollback extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/specified_rollback';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
