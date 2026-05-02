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
use Lark\Services\Vc\ExportResource;
use Lark\Services\Vc\MeetingResource;
use Lark\Services\Vc\ReportResource;
use Lark\Services\Vc\ReserveConfigResource;
use Lark\Services\Vc\ReserveResource;
use Lark\Services\Vc\RoomLevelResource;
use Lark\Services\Vc\RoomResource;
use Lark\Services\Vc\ScopeConfigResource;

final class VcService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function export(): ExportResource
    {
        return new ExportResource($this->client);
    }

    public function meeting(): MeetingResource
    {
        return new MeetingResource($this->client);
    }

    public function report(): ReportResource
    {
        return new ReportResource($this->client);
    }

    public function reserve(): ReserveResource
    {
        return new ReserveResource($this->client);
    }

    public function reserveConfig(): ReserveConfigResource
    {
        return new ReserveConfigResource($this->client);
    }

    public function room(): RoomResource
    {
        return new RoomResource($this->client);
    }

    public function roomLevel(): RoomLevelResource
    {
        return new RoomLevelResource($this->client);
    }

    public function scopeConfig(): ScopeConfigResource
    {
        return new ScopeConfigResource($this->client);
    }
}
