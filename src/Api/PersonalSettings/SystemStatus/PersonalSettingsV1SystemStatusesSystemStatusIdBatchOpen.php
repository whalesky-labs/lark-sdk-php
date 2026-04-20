<?php

declare(strict_types=1);

namespace Lark\Api\PersonalSettings\SystemStatus;

use Lark\Request\RestRequest;

/**
 * 批量开启系统状态
 *
 * @see https://feishu.apifox.cn/api-60221020
 */
final class PersonalSettingsV1SystemStatusesSystemStatusIdBatchOpen extends RestRequest
{
    protected string $apiUri = '/open-apis/personal_settings/v1/system_statuses/:system_status_id/batch_open';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
