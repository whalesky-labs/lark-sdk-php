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

namespace Lark\Services\Helpdesk;

use Lark\Api\Helpdesk\AgentEmail\HelpdeskV1AgentEmails;
use Lark\LarkClient;

final class AgentEmailResource
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
    public function get(
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        return $this->client->send(
            new HelpdeskV1AgentEmails(),
            $pathParams,
            $query,
            $payload,
            $accessToken,
            $options
        );
    }
}
