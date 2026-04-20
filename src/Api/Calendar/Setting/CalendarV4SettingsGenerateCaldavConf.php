<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Setting;

use Lark\Request\RestRequest;

/**
 * 生成 CalDAV 配置
 *
 * @see https://feishu.apifox.cn/api-9020943
 */
final class CalendarV4SettingsGenerateCaldavConf extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/settings/generate_caldav_conf';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
