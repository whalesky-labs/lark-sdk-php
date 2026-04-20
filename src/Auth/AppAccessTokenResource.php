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

namespace Lark\Auth;

use Lark\Api\Auth\AppAccessToken\AuthV3AppAccessTokenInternal;
use Lark\LarkClient;

final class AppAccessTokenResource
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return array<string, mixed>
     */
    public function create(array $payload = []): array
    {
        return $this->client->send(
            new AuthV3AppAccessTokenInternal(),
            payload: $this->resolvePayload($payload)
        );
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return array<string, mixed>
     */
    private function resolvePayload(array $payload): array
    {
        if ($payload !== []) {
            return $payload;
        }

        return [
            'app_id' => $this->client->config()->appId(),
            'app_secret' => $this->client->config()->appSecret(),
        ];
    }
}
