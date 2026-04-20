<?php

declare(strict_types=1);

namespace Lark;

use Lark\Auth\AuthService;
use Lark\Core\Config;
use Lark\Core\Http\HttpClient;
use Lark\Core\Http\RequestBuilder;
use Lark\Core\Response\ResponseDecoder;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

final class LarkClient
{
    private readonly HttpClient $httpClient;

    public function __construct(
        private readonly Config $config,
        ClientInterface $client,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory
    ) {
        $this->httpClient = new HttpClient(
            client: $client,
            requestBuilder: new RequestBuilder($config, $requestFactory, $streamFactory),
            responseDecoder: new ResponseDecoder()
        );
    }

    public function config(): Config
    {
        return $this->config;
    }

    public function auth(): AuthService
    {
        return new AuthService($this);
    }

    /**
     * @param array<string, mixed> $options
     * @return array<string, mixed>
     */
    public function request(string $method, string $path, array $options = [], ?string $accessToken = null): array
    {
        return $this->httpClient->request($method, $path, $options, $accessToken);
    }
}
