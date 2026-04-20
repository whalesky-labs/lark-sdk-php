<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Instance;

use Lark\Request\RestRequest;

/**
 * 抄送审批实例
 *
 * @see https://feishu.apifox.cn/api-9020743
 */
final class ApprovalOpenapiV2InstanceCc extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/openapi/v2/instance/cc';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
