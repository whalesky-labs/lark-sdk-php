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

namespace Lark\Api\Corehr\Leave;

use Lark\Request\RestRequest;

/**
 * 批量查询员工请假记录
 *
 * @see https://feishu.apifox.cn/api-60291633
 */
final class CorehrV1LeavesLeaveRequestHistory extends RestRequest
{
    protected string $apiUri = '/open-apis/corehr/v1/leaves/leave_request_history';

    protected string $httpMethod = 'GET';
}
