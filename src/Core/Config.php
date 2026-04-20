<?php

declare(strict_types=1);

namespace Lark\Core;

final class Config
{
    public function __construct(
        private readonly string $appId,
        private readonly string $appSecret,
        private readonly string $baseUri = 'https://open.feishu.cn',
        private readonly ?string $defaultAccessToken = null,
        private readonly string $userAgent = 'lark-sdk-php/dev'
    ) {
    }

    public function appId(): string
    {
        return $this->appId;
    }

    public function appSecret(): string
    {
        return $this->appSecret;
    }

    public function baseUri(): string
    {
        return rtrim($this->baseUri, '/');
    }

    public function defaultAccessToken(): ?string
    {
        return $this->defaultAccessToken;
    }

    public function userAgent(): string
    {
        return $this->userAgent;
    }
}
