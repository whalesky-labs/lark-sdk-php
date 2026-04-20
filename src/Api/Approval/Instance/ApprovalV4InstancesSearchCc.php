<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Instance;

use Lark\Request\RestRequest;

/**
 * 查询抄送列表
 *
 * @see https://feishu.apifox.cn/api-59948051
 */
final class ApprovalV4InstancesSearchCc extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/search_cc';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
