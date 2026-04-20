<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 删除日程
 *
 * @see https://feishu.apifox.cn/api-9020952
 */
final class CalendarV4CalendarsCalendarIdEventsEventId extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id/events/:event_id';

    protected string $httpMethod = 'DELETE';
}
