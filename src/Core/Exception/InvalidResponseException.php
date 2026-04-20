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

namespace Lark\Core\Exception;

class InvalidResponseException extends LarkException
{
    public function __construct(
        string $message,
        private readonly ?string $rawResponse = null
    ) {
        parent::__construct($message);
    }

    public function rawResponse(): ?string
    {
        return $this->rawResponse;
    }
}
