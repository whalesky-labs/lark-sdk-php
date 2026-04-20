<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 搜索日程
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/calendar-v4/calendar/get
 */
final class CalendarV4CalendarsCalendarIdEventsSearch extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id/events/search';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
