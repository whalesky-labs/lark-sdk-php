<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\UserFlow;

use Lark\Request\RestRequest;

/**
 * 导入打卡流水
 *
 * @see https://feishu.apifox.cn/api-9020784
 */
final class AttendanceV1UserFlowsBatchCreate extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_flows/batch_create';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
