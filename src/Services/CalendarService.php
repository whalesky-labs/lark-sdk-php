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

namespace Lark\Services;

use Lark\LarkClient;
use Lark\Services\Calendar\CalendarResource;
use Lark\Services\Calendar\ExchangeBindingResource;
use Lark\Services\Calendar\FreebusyResource;
use Lark\Services\Calendar\SettingResource;
use Lark\Services\Calendar\TimeoffEventResource;

final class CalendarService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function calendar(): CalendarResource
    {
        return new CalendarResource($this->client);
    }

    public function exchangeBinding(): ExchangeBindingResource
    {
        return new ExchangeBindingResource($this->client);
    }

    public function freebusy(): FreebusyResource
    {
        return new FreebusyResource($this->client);
    }

    public function setting(): SettingResource
    {
        return new SettingResource($this->client);
    }

    public function timeoffEvent(): TimeoffEventResource
    {
        return new TimeoffEventResource($this->client);
    }
}
