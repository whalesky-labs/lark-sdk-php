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

namespace Lark\Services\Vc;

use Lark\Api\Vc\Export\VcV1ExportsDownload;
use Lark\Api\Vc\Export\VcV1ExportsMeetingList;
use Lark\Api\Vc\Export\VcV1ExportsParticipantList;
use Lark\Api\Vc\Export\VcV1ExportsParticipantQualityList;
use Lark\Api\Vc\Export\VcV1ExportsResourceReservationList;
use Lark\Api\Vc\Export\VcV1ExportsTaskId;
use Lark\LarkClient;

final class ExportResource
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
    public function createMeetingList(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new VcV1ExportsMeetingList(),
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
    public function createParticipantList(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new VcV1ExportsParticipantList(),
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
    public function createParticipantQualityList(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new VcV1ExportsParticipantQualityList(),
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
    public function createResourceReservationList(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new VcV1ExportsResourceReservationList(),
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
    public function download(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new VcV1ExportsDownload(),
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
            new VcV1ExportsTaskId(),
            $pathParams,
            $query,
            $payload,
            $accessToken,
            $options
        );
    }
}
