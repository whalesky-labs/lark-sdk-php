<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserStatsView;

use Lark\Request\RestRequest;

/**
 * 更新统计设置
 *
 * @see https://feishu.apifox.cn/api-9020780
 */
final class AttendanceV1UserStatsViewsUserStatsViewId extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_stats_views/:user_stats_view_id';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
