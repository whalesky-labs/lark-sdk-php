<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 获取主日历
 *
 * @see https://feishu.apifox.cn/api-10871822
 */
final class CalendarV4CalendarsPrimary extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/primary';

    protected string $httpMethod = 'POST';
}
