<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\TimeoffEvent;

use Lark\Request\RestRequest;

/**
 * 创建请假日程
 *
 * @see https://open.feishu.cn/document/home/user-identity-introduction/introduction)
 */
final class CalendarV4TimeoffEvents extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/timeoff_events';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
