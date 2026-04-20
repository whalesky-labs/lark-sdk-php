<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\Shift;

use Lark\Request\RestRequest;

/**
 * 删除班次
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/attendance-v1/shift/query)
 */
final class AttendanceV1ShiftsShiftId extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/shifts/:shift_id';

    protected string $httpMethod = 'DELETE';
}
