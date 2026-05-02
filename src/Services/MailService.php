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
use Lark\Services\Mail\MailgroupResource;
use Lark\Services\Mail\PublicMailboxeResource;
use Lark\Services\Mail\UserMailboxeResource;
use Lark\Services\Mail\UserResource;

final class MailService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function mailgroup(): MailgroupResource
    {
        return new MailgroupResource($this->client);
    }

    public function publicMailboxe(): PublicMailboxeResource
    {
        return new PublicMailboxeResource($this->client);
    }

    public function user(): UserResource
    {
        return new UserResource($this->client);
    }

    public function userMailboxe(): UserMailboxeResource
    {
        return new UserMailboxeResource($this->client);
    }
}
