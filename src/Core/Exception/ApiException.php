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

class ApiException extends LarkException
{
    public function __construct(
        string $message,
        private readonly int|string|null $larkCode = null,
        private readonly ?string $larkMessage = null,
        private readonly ?int $httpStatusCode = null,
        private readonly ?string $method = null,
        private readonly ?string $path = null,
        private readonly ?string $rawResponse = null
    ) {
        parent::__construct($message);
    }

    public function larkCode(): int|string|null
    {
        return $this->larkCode;
    }

    public function larkMessage(): ?string
    {
        return $this->larkMessage;
    }

    public function httpStatusCode(): ?int
    {
        return $this->httpStatusCode;
    }

    public function method(): ?string
    {
        return $this->method;
    }

    public function path(): ?string
    {
        return $this->path;
    }

    public function rawResponse(): ?string
    {
        return $this->rawResponse;
    }
}
