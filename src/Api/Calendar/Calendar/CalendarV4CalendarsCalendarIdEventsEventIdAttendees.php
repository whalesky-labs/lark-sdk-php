<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 添加日程参与人
 *
 * @see https://open.feishu.cn/document/home/user-identity-introduction/introduction)
 */
final class CalendarV4CalendarsCalendarIdEventsEventIdAttendees extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id/events/:event_id/attendees';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
