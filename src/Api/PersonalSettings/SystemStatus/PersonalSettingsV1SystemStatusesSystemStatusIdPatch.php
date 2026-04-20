<?php

declare(strict_types=1);

namespace Lark\Api\PersonalSettings\SystemStatus;

use Lark\Request\RestRequest;

/**
 * 修改系统状态
 *
 * @see https://feishu.apifox.cn/api-60220183
 */
final class PersonalSettingsV1SystemStatusesSystemStatusIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/personal_settings/v1/system_statuses/:system_status_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
