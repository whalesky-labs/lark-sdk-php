<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Instance;

use Lark\Request\RestRequest;

/**
 * 查询实例列表
 *
 * @see https://feishu.apifox.cn/api-59946424
 */
final class ApprovalV4InstancesQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
