<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\TimeoffEvent;

use Lark\Request\RestRequest;

/**
 * 删除请假日程
 *
 * @see https://feishu.apifox.cn/api-9020945
 */
final class CalendarV4TimeoffEventsTimeoffEventId extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/timeoff_events/:timeoff_event_id';

    protected string $httpMethod = 'DELETE';
}
