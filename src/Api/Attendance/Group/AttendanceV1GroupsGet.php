<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\Group;

use Lark\Request\RestRequest;

/**
 * 查询所有考勤组
 *
 * @see https://feishu.apifox.cn/api-59167629
 */
final class AttendanceV1GroupsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/groups';

    protected string $httpMethod = 'GET';
}
