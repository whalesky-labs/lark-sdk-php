<?php

declare(strict_types=1);

namespace Lark\Api\PersonalSettings\SystemStatus;

use Lark\Request\RestRequest;

/**
 * 批量关闭系统状态
 *
 * @see https://feishu.apifox.cn/api-60221250
 */
final class PersonalSettingsV1SystemStatusesSystemStatusIdBatchClose extends RestRequest
{
    protected string $apiUri = '/open-apis/personal_settings/v1/system_statuses/:system_status_id/batch_close';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
