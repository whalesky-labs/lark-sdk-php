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

namespace Lark;

use Lark\Auth\AuthService;
use Lark\Core\Config;
use Lark\Core\Http\HttpClient;
use Lark\Core\Http\RequestBuilder;
use Lark\Core\Response\ResponseDecoder;
use Lark\Request\RestRequest;
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
     * @param array<string, mixed> $pathParams
     * @param array<string, mixed> $query
     * @param array<string, mixed> $payload
     * @param array<string, mixed> $options
     *
     * @return array<string, mixed>
     */
    public function send(
        RestRequest $request,
        array $pathParams = [],
        array $query = [],
        array $payload = [],
        ?string $accessToken = null,
        array $options = []
    ): array {
        $requestOptions = array_replace_recursive(
            $request->requestOptions($query, $payload),
            $options
        );

        return $this->request(
            $request->httpMethod(),
            $request->apiUri($pathParams),
            $requestOptions,
            $accessToken
        );
    }

    /**
     * @param array<string, mixed> $options
     *
     * @return array<string, mixed>
     */
    public function request(string $method, string $path, array $options = [], ?string $accessToken = null): array
    {
        return $this->httpClient->request($method, $path, $options, $accessToken);
    }
}
