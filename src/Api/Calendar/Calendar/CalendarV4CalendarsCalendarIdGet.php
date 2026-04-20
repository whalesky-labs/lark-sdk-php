<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 查询日历信息
 *
 * @see https://feishu.apifox.cn/api-10874688
 */
final class CalendarV4CalendarsCalendarIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
