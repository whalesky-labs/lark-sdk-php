<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 取消订阅日程变更事件
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/calendar-v4/calendar/get
 */
final class CalendarV4CalendarsCalendarIdEventsUnsubscription extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id/events/unsubscription';

    protected string $httpMethod = 'POST';
}
