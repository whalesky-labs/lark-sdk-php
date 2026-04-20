<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 更新日历
 *
 * @see https://feishu.apifox.cn/api-9020962
 */
final class CalendarV4CalendarsCalendarIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
