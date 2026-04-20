<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 订阅日历
 *
 * @see https://feishu.apifox.cn/api-9020964
 */
final class CalendarV4CalendarsCalendarIdSubscribe extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id/subscribe';

    protected string $httpMethod = 'POST';
}
