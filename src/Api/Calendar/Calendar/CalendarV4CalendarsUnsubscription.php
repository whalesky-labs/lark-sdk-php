<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 取消订阅日历变更事件
 *
 * @see https://feishu.apifox.cn/api-59133638
 */
final class CalendarV4CalendarsUnsubscription extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/unsubscription';

    protected string $httpMethod = 'POST';
}
