<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\Shift;

use Lark\Request\RestRequest;

/**
 * 按 ID 查询班次
 *
 * @see https://feishu.apifox.cn/api-59163508
 */
final class AttendanceV1ShiftsShiftIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/shifts/:shift_id';

    protected string $httpMethod = 'GET';
}
