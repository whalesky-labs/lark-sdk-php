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
use Lark\Services\Doc\CreateResource;
use Lark\Services\Doc\DoctokenResource;
use Lark\Services\Doc\MetaResource;

final class DocService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function create(): CreateResource
    {
        return new CreateResource($this->client);
    }

    public function doctoken(): DoctokenResource
    {
        return new DoctokenResource($this->client);
    }

    public function meta(): MetaResource
    {
        return new MetaResource($this->client);
    }
}
