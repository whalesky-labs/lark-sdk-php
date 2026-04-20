<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 创建共享日历
 *
 * @see https://feishu.apifox.cn/api-9020958
 */
final class CalendarV4Calendars extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
