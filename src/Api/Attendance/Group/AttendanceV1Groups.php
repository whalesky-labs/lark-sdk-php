<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\Group;

use Lark\Request\RestRequest;

/**
 * 创建或修改考勤组
 *
 * @see https://feishu.apifox.cn/api-9020797
 */
final class AttendanceV1Groups extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/groups';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
