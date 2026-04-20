<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 删除共享日历
 *
 * @see https://feishu.apifox.cn/api-9020959
 */
final class CalendarV4CalendarsCalendarId extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id';

    protected string $httpMethod = 'DELETE';
}
