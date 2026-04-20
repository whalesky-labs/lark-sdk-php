<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserStatsField;

use Lark\Request\RestRequest;

/**
 * 查询统计表头
 *
 * @see https://feishu.apifox.cn/api-9020778
 */
final class AttendanceV1UserStatsFieldsQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_stats_fields/query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
