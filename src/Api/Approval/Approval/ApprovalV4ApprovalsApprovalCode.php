<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Approval;

use Lark\Request\RestRequest;

/**
 * 查看指定审批定义
 *
 * @see https://feishu.apifox.cn/api-59181867
 */
final class ApprovalV4ApprovalsApprovalCode extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/approvals/:approval_code';

    protected string $httpMethod = 'GET';
}
