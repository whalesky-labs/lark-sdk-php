<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Approval;

use Lark\Request\RestRequest;

/**
 * 创建审批定义
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uADM4QjLwADO04CMwgDN
 */
final class ApprovalV4Approvals extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/approvals';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
