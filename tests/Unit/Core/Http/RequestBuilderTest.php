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
use Lark\Core\Exception\LarkException;
use Lark\Core\Http\RequestBuilder;
use Nyholm\Psr7\Factory\Psr17Factory;
use PHPUnit\Framework\TestCase;

final class RequestBuilderTest extends TestCase
{
    public function testBuildCreatesRequestWithQueryAndDefaultHeaders(): void
    {
        $factory = new Psr17Factory();
        $builder = new RequestBuilder(
            new Config(
                appId: 'cli_xxx',
                appSecret: 'secret_xxx',
                defaultAccessToken: 'default_token',
                userAgent: 'test-agent/1.0'
            ),
            $factory,
            $factory
        );

        $request = $builder->build('get', '/open-apis/contact/v3/users', [
            'query' => [
                'department_id' => '0',
                'user_id_type' => 'open_id',
            ],
        ]);

        self::assertSame('GET', $request->getMethod());
        self::assertSame(
            'https://open.feishu.cn/open-apis/contact/v3/users?department_id=0&user_id_type=open_id',
            (string) $request->getUri()
        );
        self::assertSame('application/json', $request->getHeaderLine('Accept'));
        self::assertSame('test-agent/1.0', $request->getHeaderLine('User-Agent'));
        self::assertSame('Bearer default_token', $request->getHeaderLine('Authorization'));
    }

    public function testBuildCreatesJsonBodyAndKeepsExplicitContentType(): void
    {
        $factory = new Psr17Factory();
        $builder = new RequestBuilder(
            new Config('cli_xxx', 'secret_xxx'),
            $factory,
            $factory
        );

        $request = $builder->build('POST', '/open-apis/im/v1/messages', [
            'headers' => [
                'Content-Type' => 'application/json; charset=utf-8',
            ],
            'json' => [
                'msg_type' => 'text',
                'content' => '{"text":"hello"}',
            ],
        ], 'token_xxx');

        self::assertSame('application/json; charset=utf-8', $request->getHeaderLine('Content-Type'));
        self::assertSame('Bearer token_xxx', $request->getHeaderLine('Authorization'));
        self::assertSame(
            '{"msg_type":"text","content":"{\"text\":\"hello\"}"}',
            (string) $request->getBody()
        );
    }

    public function testBuildCreatesFormParamsBody(): void
    {
        $factory = new Psr17Factory();
        $builder = new RequestBuilder(new Config('cli_xxx', 'secret_xxx'), $factory, $factory);

        $request = $builder->build('POST', '/open-apis/form', [
            'form_params' => [
                'foo' => 'bar',
                'baz' => 'qux',
            ],
        ]);

        self::assertSame('application/x-www-form-urlencoded', $request->getHeaderLine('Content-Type'));
        self::assertSame('foo=bar&baz=qux', (string) $request->getBody());
    }

    public function testBuildCreatesMultipartBody(): void
    {
        $factory = new Psr17Factory();
        $builder = new RequestBuilder(new Config('cli_xxx', 'secret_xxx'), $factory, $factory);

        $request = $builder->build('POST', '/open-apis/im/v1/files', [
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => 'file-content',
                    'filename' => 'demo.txt',
                    'headers' => [
                        'Content-Type' => 'text/plain',
                    ],
                ],
            ],
        ]);

        self::assertStringStartsWith('multipart/form-data; boundary=', $request->getHeaderLine('Content-Type'));
        self::assertStringContainsString('filename="demo.txt"', (string) $request->getBody());
        self::assertStringContainsString('file-content', (string) $request->getBody());
    }

    public function testBuildThrowsWhenJsonEncodingFails(): void
    {
        $factory = new Psr17Factory();
        $builder = new RequestBuilder(new Config('cli_xxx', 'secret_xxx'), $factory, $factory);

        $this->expectException(LarkException::class);
        $this->expectExceptionMessage('Unable to encode request JSON body.');

        $builder->build('POST', '/open-apis/im/v1/messages', [
            'json' => [
                'value' => INF,
            ],
        ]);
    }
}
