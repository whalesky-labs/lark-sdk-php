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

namespace Lark\Services\Task;

use Lark\Api\Task\Task\TaskV1Tasks;
use Lark\Api\Task\Task\TaskV1TasksTaskIdPatch;
use Lark\LarkClient;

final class MarkdownModuleResource
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    /**
     * @param array<string, mixed> $pathParams
     * @param array<string, mixed> $query
     * @param array<string, mixed> $payload
     * @param array<string, mixed> $options
     *
     * @return array<string, mixed>
     */
    public function create(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new TaskV1Tasks(),
            $pathParams,
            $query,
            $payload,
            $accessToken,
            $options
        );
    }

    /**
     * @param array<string, mixed> $pathParams
     * @param array<string, mixed> $query
     * @param array<string, mixed> $payload
     * @param array<string, mixed> $options
     *
     * @return array<string, mixed>
     */
    public function patch(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new TaskV1TasksTaskIdPatch(),
            $pathParams,
            $query,
            $payload,
            $accessToken,
            $options
        );
    }
}
