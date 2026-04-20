<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\Freebusy;

use Lark\Request\RestRequest;

/**
 * 查询主日历忙闲信息
 *
 * @see https://feishu.apifox.cn/api-59131583
 */
final class CalendarV4FreebusyList extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/freebusy/list';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
