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
use Lark\Services\Admin\AdminDeptStatResource;
use Lark\Services\Admin\AdminUserStatResource;
use Lark\Services\Admin\BadgeImageResource;
use Lark\Services\Admin\BadgeResource;
use Lark\Services\Admin\PasswordResource;

final class AdminService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function adminDeptStat(): AdminDeptStatResource
    {
        return new AdminDeptStatResource($this->client);
    }

    public function adminUserStat(): AdminUserStatResource
    {
        return new AdminUserStatResource($this->client);
    }

    public function badge(): BadgeResource
    {
        return new BadgeResource($this->client);
    }

    public function badgeImage(): BadgeImageResource
    {
        return new BadgeImageResource($this->client);
    }

    public function password(): PasswordResource
    {
        return new PasswordResource($this->client);
    }
}
