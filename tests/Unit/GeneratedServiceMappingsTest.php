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

namespace Lark\Tests\Unit;

use Lark\Core\Config;
use Lark\LarkClient;
use Lark\Tests\Support\MockHttpClient;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

final class GeneratedServiceMappingsTest extends TestCase
{
    public function testClientExposesExpectedCamelCaseModuleMethods(): void
    {
        $client = $this->makeClient(new MockHttpClient(
            fn () => new Response(200, ['Content-Type' => 'application/json'], '{"code":0}')
        ));

        self::assertTrue(method_exists($client, 'faceVerify'));
        self::assertTrue(method_exists($client, 'meetingRoom'));
        self::assertTrue(method_exists($client, 'personalSettings'));
        self::assertTrue(method_exists($client, 'humanAuthentication'));
        self::assertTrue(method_exists($client, 'speechToText'));
    }

    #[DataProvider('generatedCallProvider')]
    public function testGeneratedResourceMethodMapsToExpectedRequest(
        callable $call,
        string $expectedMethod,
        string $expectedPath,
        string $expectedQuery = '',
        string $expectedBody = '',
        ?string $expectedAuthorization = null,
        ?string $expectedContentType = null
    ): void {
        $httpClient = new MockHttpClient(function (RequestInterface $request) use (
            $expectedMethod,
            $expectedPath,
            $expectedQuery,
            $expectedBody,
            $expectedAuthorization,
            $expectedContentType
        ): Response {
            self::assertSame($expectedMethod, $request->getMethod());
            self::assertSame($expectedPath, $request->getUri()->getPath());
            self::assertSame($expectedQuery, $request->getUri()->getQuery());

            if ($expectedAuthorization !== null) {
                self::assertSame($expectedAuthorization, $request->getHeaderLine('Authorization'));
            }

            if ($expectedContentType !== null) {
                self::assertSame($expectedContentType, $request->getHeaderLine('Content-Type'));
            }

            self::assertSame($expectedBody, (string) $request->getBody());

            return new Response(
                200,
                ['Content-Type' => 'application/json'],
                json_encode(['code' => 0, 'ok' => true], JSON_THROW_ON_ERROR)
            );
        });

        $client = $this->makeClient($httpClient);
        $response = $call($client);

        self::assertTrue($response['ok']);
    }

    /** @return iterable<string, array{0:callable,1:string,2:string,3:string,4:string,5:?string,6:?string}> */
    public static function generatedCallProvider(): iterable
    {
        yield 'contact user batchGetId' => [
            static fn (LarkClient $client): array => $client->contact()->user()->batchGetId(
                payload: [
                    'mobiles' => ['13800000000'],
                ],
                accessToken: 'tenant_token'
            ),
            'POST',
            '/open-apis/contact/v3/users/batch_get_id',
            '',
            '{"mobiles":["13800000000"]}',
            'Bearer tenant_token',
            'application/json; charset=utf-8',
        ];

        yield 'im message create' => [
            static fn (LarkClient $client): array => $client->im()->message()->create(
                query: ['receive_id_type' => 'open_id'],
                payload: [
                    'receive_id' => 'ou_xxx',
                    'msg_type' => 'text',
                    'content' => '{"text":"hello"}',
                ],
                accessToken: 'tenant_token'
            ),
            'POST',
            '/open-apis/im/v1/messages',
            'receive_id_type=open_id',
            '{"receive_id":"ou_xxx","msg_type":"text","content":"{\"text\":\"hello\"}"}',
            'Bearer tenant_token',
            'application/json; charset=utf-8',
        ];

        yield 'approval task approve' => [
            static fn (LarkClient $client): array => $client->approval()->task()->approve(
                payload: [
                    'task_id' => 'task_xxx',
                    'user_id' => 'ou_xxx',
                ],
                accessToken: 'tenant_token'
            ),
            'POST',
            '/open-apis/approval/v4/tasks/approve',
            '',
            '{"task_id":"task_xxx","user_id":"ou_xxx"}',
            'Bearer tenant_token',
            'application/json; charset=utf-8',
        ];

        yield 'calendar createEvents' => [
            static fn (LarkClient $client): array => $client->calendar()->calendar()->createEvents(
                pathParams: ['calendar_id' => 'cal_xxx'],
                payload: [
                    'summary' => 'demo',
                ],
                accessToken: 'tenant_token'
            ),
            'POST',
            '/open-apis/calendar/v4/calendars/cal_xxx/events',
            '',
            '{"summary":"demo"}',
            'Bearer tenant_token',
            'application/json; charset=utf-8',
        ];

        yield 'drive patchPublic' => [
            static fn (LarkClient $client): array => $client->drive()->permission()->patchPublic(
                pathParams: ['token' => 'file_xxx'],
                payload: [
                    'external_access_entity' => 'open',
                ],
                accessToken: 'tenant_token'
            ),
            'PATCH',
            '/open-apis/drive/v1/permissions/file_xxx/public',
            '',
            '{"external_access_entity":"open"}',
            'Bearer tenant_token',
            'application/json; charset=utf-8',
        ];
    }

    private function makeClient(MockHttpClient $httpClient): LarkClient
    {
        $factory = new Psr17Factory();

        return new LarkClient(
            new Config(appId: 'cli_xxx', appSecret: 'secret_xxx'),
            $httpClient,
            $factory,
            $factory
        );
    }
}
