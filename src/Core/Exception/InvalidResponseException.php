<?php

declare(strict_types=1);

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
