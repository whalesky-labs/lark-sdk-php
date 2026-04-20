<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 删除日程参与人
 *
 * @see https://feishu.apifox.cn/api-9020950
 */
final class CalendarV4CalendarsCalendarIdEventsEventIdAttendeesBatchDelete extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id/events/:event_id/attendees/batch_delete';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
