<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\Group;

use Lark\Request\RestRequest;

/**
 * 删除考勤组
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/attendance-v1/group/create)
 */
final class AttendanceV1GroupsGroupId extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/groups/:group_id';

    protected string $httpMethod = 'DELETE';
}
