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
use Lark\Services\MeetingRoom\FreebusyResource;
use Lark\Services\MeetingRoom\InstanceResource;
use Lark\Services\MeetingRoom\SummaryResource;

final class MeetingRoomService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function freebusy(): FreebusyResource
    {
        return new FreebusyResource($this->client);
    }

    public function instance(): InstanceResource
    {
        return new InstanceResource($this->client);
    }

    public function summary(): SummaryResource
    {
        return new SummaryResource($this->client);
    }
}
