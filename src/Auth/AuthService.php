<?php

declare(strict_types=1);

namespace Lark\Auth;

use Lark\LarkClient;

final class AuthService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }

    public function appAccessToken(): AppAccessTokenResource
    {
        return new AppAccessTokenResource($this->client);
    }

    public function tenantAccessToken(): TenantAccessTokenResource
    {
        return new TenantAccessTokenResource($this->client);
    }
}
