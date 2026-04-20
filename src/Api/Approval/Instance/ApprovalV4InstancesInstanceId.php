<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Instance;

use Lark\Request\RestRequest;

/**
 * 获取单个审批实例详情
 *
 * @see https://feishu.apifox.cn/api-9020734
 */
final class ApprovalV4InstancesInstanceId extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/:instance_id';

    protected string $httpMethod = 'POST';
}
