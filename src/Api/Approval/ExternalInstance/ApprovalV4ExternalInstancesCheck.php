<?php

declare(strict_types=1);

namespace Lark\Api\Approval\ExternalInstance;

use Lark\Request\RestRequest;

/**
 * 校验三方审批实例
 *
 * @see https://feishu.apifox.cn/api-59940866
 */
final class ApprovalV4ExternalInstancesCheck extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/external_instances/check';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
