<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 订阅日历变更事件
 *
 * @see https://feishu.apifox.cn/api-9020966
 */
final class CalendarV4CalendarsSubscription extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/subscription';

    protected string $httpMethod = 'POST';
}
