<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 订阅日历访问控制变更事件
 *
 * @see https://feishu.apifox.cn/api-9020970
 */
final class CalendarV4CalendarsCalendarIdAclsSubscription extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id/acls/subscription';

    protected string $httpMethod = 'POST';
}
