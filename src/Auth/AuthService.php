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
