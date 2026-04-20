<?php

declare(strict_types=1);

namespace Lark\Api\PersonalSettings\SystemStatus;

use Lark\Request\RestRequest;

/**
 * 创建系统状态
 *
 * @see https://feishu.apifox.cn/api-60211755
 */
final class PersonalSettingsV1SystemStatuses extends RestRequest
{
    protected string $apiUri = '/open-apis/personal_settings/v1/system_statuses';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
