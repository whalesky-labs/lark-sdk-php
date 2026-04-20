<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 创建日程
 *
 * @see https://feishu.apifox.cn/api-9020951
 */
final class CalendarV4CalendarsCalendarIdEvents extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id/events';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
