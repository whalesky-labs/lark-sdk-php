<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 搜索日历
 *
 * @see https://feishu.apifox.cn/api-9020963
 */
final class CalendarV4CalendarsSearch extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/search';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
