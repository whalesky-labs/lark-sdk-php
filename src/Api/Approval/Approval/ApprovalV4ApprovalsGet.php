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
 * 查询审批定义列表
 *
 * @see https://feishu.apifox.cn/api-59181909
 */
final class ApprovalV4ApprovalsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/approvals';

    protected string $httpMethod = 'GET';
}
