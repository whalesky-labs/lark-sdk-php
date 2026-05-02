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
use Lark\Services\Baike\ClassificationResource;
use Lark\Services\Baike\DraftResource;
use Lark\Services\Baike\EntityResource;
use Lark\Services\Baike\FileResource;

final class BaikeService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function classification(): ClassificationResource
    {
        return new ClassificationResource($this->client);
    }

    public function draft(): DraftResource
    {
        return new DraftResource($this->client);
    }

    public function entity(): EntityResource
    {
        return new EntityResource($this->client);
    }

    public function file(): FileResource
    {
        return new FileResource($this->client);
    }
}
