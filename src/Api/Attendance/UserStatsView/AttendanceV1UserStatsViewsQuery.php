<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserStatsView;

use Lark\Request\RestRequest;

/**
 * 查询统计设置
 *
 * @see https://feishu.apifox.cn/api-59170887
 */
final class AttendanceV1UserStatsViewsQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_stats_views/query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
