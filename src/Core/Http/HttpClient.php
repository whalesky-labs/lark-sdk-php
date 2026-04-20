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

namespace Lark\Core\Http;

use Lark\Core\Exception\HttpException;
use Lark\Core\Response\ResponseDecoder;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;

final class HttpClient
{
    public function __construct(
        private readonly ClientInterface $client,
        private readonly RequestBuilder $requestBuilder,
        private readonly ResponseDecoder $responseDecoder = new ResponseDecoder()
    ) {
    }

    /**
     * @param array<string, mixed> $options
     *
     * @return array<string, mixed>
     */
    public function request(string $method, string $path, array $options = [], ?string $accessToken = null): array
    {
        $request = $this->requestBuilder->build($method, $path, $options, $accessToken);

        try {
            $response = $this->client->sendRequest($request);
        } catch (ClientExceptionInterface $exception) {
            throw new HttpException(
                message: sprintf('Unable to send request to Lark API: %s', $exception->getMessage()),
                method: strtoupper($method),
                path: $path,
                previous: $exception
            );
        }

        return $this->responseDecoder->decode($response, strtoupper($method), $path);
    }
}
