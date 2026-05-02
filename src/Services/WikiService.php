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
use Lark\Services\Wiki\NodeResource;
use Lark\Services\Wiki\SpaceResource;
use Lark\Services\Wiki\TaskResource;

final class WikiService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function node(): NodeResource
    {
        return new NodeResource($this->client);
    }

    public function space(): SpaceResource
    {
        return new SpaceResource($this->client);
    }

    public function task(): TaskResource
    {
        return new TaskResource($this->client);
    }
}
