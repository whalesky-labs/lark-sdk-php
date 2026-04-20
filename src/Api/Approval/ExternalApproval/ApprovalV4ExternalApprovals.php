<?php

declare(strict_types=1);

namespace Lark\Api\Approval\ExternalApproval;

use Lark\Request\RestRequest;

/**
 * 创建三方审批定义
 *
 * @see https://feishu.apifox.cn/api-59935191
 */
final class ApprovalV4ExternalApprovals extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/external_approvals';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
