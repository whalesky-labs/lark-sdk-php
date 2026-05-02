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
use Lark\Services\Im\BatchMessageResource;
use Lark\Services\Im\ChatResource;
use Lark\Services\Im\FileResource;
use Lark\Services\Im\ImageResource;
use Lark\Services\Im\MessageResource;
use Lark\Services\Im\PinResource;

final class ImService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function batchMessage(): BatchMessageResource
    {
        return new BatchMessageResource($this->client);
    }

    public function chat(): ChatResource
    {
        return new ChatResource($this->client);
    }

    public function file(): FileResource
    {
        return new FileResource($this->client);
    }

    public function image(): ImageResource
    {
        return new ImageResource($this->client);
    }

    public function message(): MessageResource
    {
        return new MessageResource($this->client);
    }

    public function pin(): PinResource
    {
        return new PinResource($this->client);
    }
}
