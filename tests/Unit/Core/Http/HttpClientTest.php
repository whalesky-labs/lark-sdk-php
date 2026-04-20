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

namespace Lark\Tests\Unit\Core\Http;

use Lark\Core\Config;
use Lark\Core\Exception\HttpException;
use Lark\Core\Http\HttpClient;
use Lark\Core\Http\RequestBuilder;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;

final class HttpClientTest extends TestCase
{
    public function testRequestWrapsClientException(): void
    {
        $psrClient = new class () implements ClientInterface {
            public function sendRequest(RequestInterface $request): Response
            {
                throw new class ('network down') extends \RuntimeException implements ClientExceptionInterface {
                };
            }
        };

        $factory = new Psr17Factory();
        $httpClient = new HttpClient(
            $psrClient,
            new RequestBuilder(new Config('cli_xxx', 'secret_xxx'), $factory, $factory)
        );

        $this->expectException(HttpException::class);
        $this->expectExceptionMessage('Unable to send request to Lark API: network down');

        $httpClient->request('GET', '/open-apis/im/v1/messages');
    }

    public function testRequestReturnsDecodedPayload(): void
    {
        $psrClient = new class () implements ClientInterface {
            public function sendRequest(RequestInterface $request): Response
            {
                return new Response(
                    200,
                    ['Content-Type' => 'application/json'],
                    json_encode(['code' => 0, 'data' => ['ok' => true]], JSON_THROW_ON_ERROR)
                );
            }
        };

        $factory = new Psr17Factory();
        $httpClient = new HttpClient(
            $psrClient,
            new RequestBuilder(new Config('cli_xxx', 'secret_xxx'), $factory, $factory)
        );

        $response = $httpClient->request('GET', '/open-apis/im/v1/messages');

        self::assertSame(['code' => 0, 'data' => ['ok' => true]], $response);
    }
}
