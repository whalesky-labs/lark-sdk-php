<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 取消订阅日历访问控制变更事件
 *
 * @see https://feishu.apifox.cn/api-59135826
 */
final class CalendarV4CalendarsCalendarIdAclsUnsubscription extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id/acls/unsubscription';

    protected string $httpMethod = 'POST';
}
