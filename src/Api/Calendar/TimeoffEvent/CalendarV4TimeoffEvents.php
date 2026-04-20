<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

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
