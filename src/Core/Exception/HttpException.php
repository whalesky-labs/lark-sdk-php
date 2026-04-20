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

use Throwable;

class HttpException extends LarkException
{
    public function __construct(
        string $message,
        private readonly ?string $method = null,
        private readonly ?string $path = null,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, 0, $previous);
    }

    public function method(): ?string
    {
        return $this->method;
    }

    public function path(): ?string
    {
        return $this->path;
    }
}
