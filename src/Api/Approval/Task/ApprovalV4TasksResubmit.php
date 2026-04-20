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

namespace Lark\Api\Approval\Task;

use Lark\Request\RestRequest;

/**
 * 重新提交审批任务
 *
 * @see https://feishu.apifox.cn/api-59917604
 */
final class ApprovalV4TasksResubmit extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/tasks/resubmit';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
