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

namespace Lark\Api\Attendance\UserFlow;

use Lark\Request\RestRequest;

/**
 * 查询打卡流水
 *
 * @see https://feishu.apifox.cn/api-9020785
 */
final class AttendanceV1UserFlowsUserFlowId extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_flows/:user_flow_id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
