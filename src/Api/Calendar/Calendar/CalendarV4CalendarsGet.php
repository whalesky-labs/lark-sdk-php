<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 查询日历列表
 *
 * @see https://feishu.apifox.cn/api-9020961
 */
final class CalendarV4CalendarsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars';

    protected string $httpMethod = 'GET';
}
