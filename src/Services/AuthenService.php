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
use Lark\Services\Authen\AccessTokenResource;
use Lark\Services\Authen\RefreshAccessTokenResource;
use Lark\Services\Authen\UserInfoResource;

final class AuthenService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function accessToken(): AccessTokenResource
    {
        return new AccessTokenResource($this->client);
    }

    public function refreshAccessToken(): RefreshAccessTokenResource
    {
        return new RefreshAccessTokenResource($this->client);
    }

    public function userInfo(): UserInfoResource
    {
        return new UserInfoResource($this->client);
    }
}
