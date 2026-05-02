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

namespace Lark\Services\Hire;

use Lark\Api\Hire\Job\HireV1JobsCombinedCreate;
use Lark\Api\Hire\Job\HireV1JobsJobId;
use Lark\Api\Hire\Job\HireV1JobsJobIdCombinedUpdate;
use Lark\Api\Hire\Job\HireV1JobsJobIdConfig;
use Lark\Api\Hire\Job\HireV1JobsJobIdManagersManagerId;
use Lark\Api\Hire\Job\HireV1JobsJobIdUpdateConfig;
use Lark\LarkClient;

final class JobResource
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
    public function createCombinedCreate(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new HireV1JobsCombinedCreate(),
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
    public function get(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new HireV1JobsJobId(),
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
    public function getConfig(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new HireV1JobsJobIdConfig(),
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
    public function getManagers(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new HireV1JobsJobIdManagersManagerId(),
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
    public function updateCombined(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new HireV1JobsJobIdCombinedUpdate(),
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
    public function updateConfig(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new HireV1JobsJobIdUpdateConfig(),
            $pathParams,
            $query,
            $payload,
            $accessToken,
            $options
        );
    }
}
