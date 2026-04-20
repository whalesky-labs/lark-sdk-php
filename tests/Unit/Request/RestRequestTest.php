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

namespace Lark\Tests\Unit\Request;

use Lark\Request\RestRequest;
use PHPUnit\Framework\TestCase;

final class RestRequestTest extends TestCase
{
    public function testApiUriReplacesNamedPathParams(): void
    {
        $request = new class () extends RestRequest {
            protected string $apiUri = '/open-apis/contact/v3/users/:user_id/departments/:department_id';
        };

        self::assertSame(
            '/open-apis/contact/v3/users/ou_xxx/departments/od_xxx',
            $request->apiUri([
                'user_id' => 'ou_xxx',
                'department_id' => 'od_xxx',
            ])
        );
    }

    public function testRequestOptionsOnlyIncludesProvidedValues(): void
    {
        $request = new class () extends RestRequest {
            protected array $headers = [
                'Content-Type' => 'application/json; charset=utf-8',
            ];
        };

        self::assertSame([
            'headers' => [
                'Content-Type' => 'application/json; charset=utf-8',
            ],
            'query' => [
                'page_size' => 10,
            ],
            'json' => [
                'name' => 'demo',
            ],
        ], $request->requestOptions(
            query: ['page_size' => 10],
            payload: ['name' => 'demo']
        ));
    }
}
