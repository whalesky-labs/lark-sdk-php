<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\Shift;

use Lark\Request\RestRequest;

/**
 * 查询所有班次
 *
 * @see https://feishu.apifox.cn/api-59166439
 */
final class AttendanceV1ShiftsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/shifts';

    protected string $httpMethod = 'GET';
}
