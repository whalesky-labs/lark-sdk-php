<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 获取日程参与群成员列表
 *
 * @see https://feishu.apifox.cn/api-59138443
 */
final class CalendarV4CalendarsCalendarIdEventsEventIdAttendeesAttendeeIdChatMembers extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id/events/:event_id/attendees/:attendee_id/chat_members';

    protected string $httpMethod = 'GET';
}
