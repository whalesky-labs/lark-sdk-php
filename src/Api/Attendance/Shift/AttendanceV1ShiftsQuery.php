<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\Shift;

use Lark\Request\RestRequest;

/**
 * 按名称查询班次
 *
 * @see https://feishu.apifox.cn/api-11009905
 */
final class AttendanceV1ShiftsQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/shifts/query';

    protected string $httpMethod = 'POST';
}
