<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\ApprovalInfo;

use Lark\Request\RestRequest;

/**
 * 通知审批状态更新
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/Attendance//task/get-user-attendance-data2)
 */
final class AttendanceV1ApprovalInfosProcess extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/approval_infos/process';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
