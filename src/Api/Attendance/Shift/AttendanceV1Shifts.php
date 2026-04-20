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

namespace Lark\Api\Attendance\Shift;

use Lark\Request\RestRequest;

/**
 * 创建班次
 *
 * @see https://feishu.apifox.cn/api-9020800
 */
final class AttendanceV1Shifts extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/shifts';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
