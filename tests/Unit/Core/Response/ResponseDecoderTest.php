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

namespace Lark\Tests\Unit\Core\Response;

use Lark\Core\Exception\ApiException;
use Lark\Core\Exception\DecodeException;
use Lark\Core\Exception\InvalidResponseException;
use Lark\Core\Response\ResponseDecoder;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;

final class ResponseDecoderTest extends TestCase
{
    public function testDecodeReturnsEmptyArrayWhenBodyIsEmpty(): void
    {
        $decoder = new ResponseDecoder();

        $decoded = $decoder->decode(new Response(204, [], ''), 'GET', '/open-apis/test');

        self::assertSame([], $decoded);
    }

    public function testDecodeThrowsWhenJsonIsInvalid(): void
    {
        $decoder = new ResponseDecoder();

        try {
            $decoder->decode(new Response(200, [], '{invalid'), 'GET', '/open-apis/test');
            self::fail('Expected DecodeException was not thrown.');
        } catch (DecodeException $exception) {
            self::assertSame('Unable to decode Lark API response.', $exception->getMessage());
            self::assertSame('{invalid', $exception->rawResponse());
        }
    }

    public function testDecodeThrowsWhenDecodedPayloadIsNotArray(): void
    {
        $decoder = new ResponseDecoder();

        $this->expectException(InvalidResponseException::class);
        $this->expectExceptionMessage('Lark API response must decode to an array.');

        $decoder->decode(new Response(200, [], '"ok"'), 'GET', '/open-apis/test');
    }

    public function testDecodeThrowsApiExceptionWhenCodeIsNotZero(): void
    {
        $decoder = new ResponseDecoder();

        try {
            $decoder->decode(
                new Response(
                    200,
                    ['Content-Type' => 'application/json'],
                    json_encode(['code' => 99991663, 'msg' => 'invalid tenant access token'], JSON_THROW_ON_ERROR)
                ),
                'GET',
                '/open-apis/im/v1/messages'
            );
            self::fail('Expected ApiException was not thrown.');
        } catch (ApiException $exception) {
            self::assertSame('Lark API request failed: invalid tenant access token', $exception->getMessage());
            self::assertSame(99991663, $exception->larkCode());
            self::assertSame('invalid tenant access token', $exception->larkMessage());
            self::assertSame(200, $exception->httpStatusCode());
            self::assertSame('GET', $exception->method());
            self::assertSame('/open-apis/im/v1/messages', $exception->path());
        }
    }
}
