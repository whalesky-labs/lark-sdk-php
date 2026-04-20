<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Instance;

use Lark\Request\RestRequest;

/**
 * 审批任务加签
 *
 * @see https://feishu.apifox.cn/api-59916225
 */
final class ApprovalV4InstancesAddSign extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/add_sign';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
