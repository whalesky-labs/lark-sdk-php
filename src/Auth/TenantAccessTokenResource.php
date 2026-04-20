<?php

declare(strict_types=1);

namespace Lark\Auth;

use Lark\LarkClient;

final class TenantAccessTokenResource
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }

    /**
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function create(array $payload = []): array
    {
        return $this->client->request(
            'POST',
            '/open-apis/auth/v3/tenant_access_token/internal',
            ['json' => $this->resolvePayload($payload)]
        );
    }

    /**
     * @param array<string, mixed> $payload
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
