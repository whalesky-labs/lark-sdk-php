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
use Lark\Services\Acs\DeviceResource;
use Lark\Services\Acs\UserResource;

final class AcsService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function device(): DeviceResource
    {
        return new DeviceResource($this->client);
    }

    public function user(): UserResource
    {
        return new UserResource($this->client);
    }
}
