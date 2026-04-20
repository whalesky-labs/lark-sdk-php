<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

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
