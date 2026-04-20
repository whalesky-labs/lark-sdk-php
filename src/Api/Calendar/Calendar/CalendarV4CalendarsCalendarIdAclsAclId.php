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

namespace Lark\Api\Calendar\Calendar;

use Lark\Request\RestRequest;

/**
 * 删除访问控制
 *
 * @see https://feishu.apifox.cn/api-9020968
 */
final class CalendarV4CalendarsCalendarIdAclsAclId extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/calendars/:calendar_id/acls/:acl_id';

    protected string $httpMethod = 'DELETE';
}
