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
use Lark\Services\Ephemeral\DeleteResource;
use Lark\Services\Ephemeral\SendResource;

final class EphemeralService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function delete(): DeleteResource
    {
        return new DeleteResource($this->client);
    }

    public function send(): SendResource
    {
        return new SendResource($this->client);
    }
}
