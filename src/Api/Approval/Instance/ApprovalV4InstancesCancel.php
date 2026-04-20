<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Instance;

use Lark\Request\RestRequest;

/**
 * 撤回审批实例
 *
 * @see https://feishu.apifox.cn/api-9020739
 */
final class ApprovalV4InstancesCancel extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/cancel';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
