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
 * 取消订阅审批事件
 *
 * @see https://feishu.apifox.cn/api-9020748
 */
final class ApprovalV4ApprovalsApprovalCodeUnsubscribe extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/approvals/:approval_code/unsubscribe';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
