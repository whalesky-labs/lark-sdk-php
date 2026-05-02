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

use Lark\Api\Hire\Note\HireV1Notes;
use Lark\Api\Hire\Note\HireV1NotesGet;
use Lark\Api\Hire\Note\HireV1NotesNoteId;
use Lark\LarkClient;

final class NoteResource
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
            new HireV1Notes(),
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
            new HireV1NotesGet(),
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
            new HireV1NotesNoteId(),
            $pathParams,
            $query,
            $payload,
            $accessToken,
            $options
        );
    }
}
