<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserStatsData;

use Lark\Request\RestRequest;

/**
 * 查询统计数据
 *
 * @see https://feishu.apifox.cn/api-9020777
 */
final class AttendanceV1UserStatsDatasQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_stats_datas/query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
