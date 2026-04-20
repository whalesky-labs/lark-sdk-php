<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserFlow;

use Lark\Request\RestRequest;

/**
 * 批量查询打卡流水
 *
 * @see https://feishu.apifox.cn/api-9020783
 */
final class AttendanceV1UserFlowsQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_flows/query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
