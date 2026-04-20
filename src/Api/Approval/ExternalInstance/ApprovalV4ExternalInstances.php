<?php

declare(strict_types=1);

namespace Lark\Api\Approval\ExternalInstance;

use Lark\Request\RestRequest;

/**
 * 同步三方审批实例
 *
 * @see https://feishu.apifox.cn/api-59940234
 */
final class ApprovalV4ExternalInstances extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/external_instances';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
