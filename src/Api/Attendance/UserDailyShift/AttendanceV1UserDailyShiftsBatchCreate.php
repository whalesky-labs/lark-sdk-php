<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserDailyShift;

use Lark\Request\RestRequest;

/**
 * 创建或修改班表
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/attendance-v1/group/create)
 */
final class AttendanceV1UserDailyShiftsBatchCreate extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_daily_shifts/batch_create';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
