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

require_once dirname(__DIR__) . '/bootstrap.php';

use GuzzleHttp\Client as GuzzleClient;
use Lark\Core\Config;
use Lark\LarkClient;
use Lark\Request\RestRequest;
use Lark\Tests\Fixtures\TestConfigFactory;
use Nyholm\Psr7\Factory\Psr17Factory;

$usage = <<<'TEXT'
Lark OpenAPI manual caller

Usage:
  php tests/Functional/api_call.php <method> <path> [options_json] [access_token]

Examples:
  php tests/Functional/api_call.php GET /open-apis/auth/v3/app_access_token/internal
  php tests/Functional/api_call.php GET /open-apis/contact/v3/users '{"query":{"department_id":"0"}}' YOUR_ACCESS_TOKEN
  php tests/Functional/api_call.php POST /open-apis/im/v1/messages '{"query":{"receive_id_type":"open_id"},"payload":{"receive_id":"ou_xxx","msg_type":"text","content":"{\"text\":\"hello\"}"}}' YOUR_ACCESS_TOKEN

Notes:
  - options_json supports {"path_params":{},"query":{},"payload":{},"headers":{},"options":{}}.
  - If [access_token] is omitted, the script uses LARK_TEST_ACCESS_TOKEN from .env.
TEXT;

$method = $argv[1] ?? null;
$path = $argv[2] ?? null;
$optionsJson = $argv[3] ?? '{}';
$accessToken = $argv[4] ?? TestConfigFactory::accessToken();

if ($method === null || $path === null) {
    fwrite(STDOUT, $usage . PHP_EOL);
    exit(1);
}

try {
    $decoded = json_decode($optionsJson, true, 512, JSON_THROW_ON_ERROR);
    if (!is_array($decoded)) {
        throw new InvalidArgumentException('options_json must decode to an object.');
    }

    $factory = new Psr17Factory();
    $client = new LarkClient(
        new Config(
            appId: TestConfigFactory::appId(),
            appSecret: TestConfigFactory::appSecret(),
            baseUri: TestConfigFactory::baseUri(),
            userAgent: TestConfigFactory::userAgent(),
        ),
        new GuzzleClient(),
        $factory,
        $factory
    );

    $options = array_replace_recursive(
        array_filter([
            'headers' => $decoded['headers'] ?? [],
            'query' => $decoded['query'] ?? [],
            'json' => $decoded['payload'] ?? [],
        ], static fn (mixed $value): bool => $value !== []),
        $decoded['options'] ?? []
    );

    $request = new class ($path, strtoupper($method), (array) ($options['headers'] ?? [])) extends RestRequest {
        /** @param array<string, string> $headers */
        public function __construct(string $path, string $method, array $headers)
        {
            $this->apiUri = $path;
            $this->httpMethod = $method;
            $this->headers = $headers;
        }
    };

    $extraOptions = $options;
    unset($extraOptions['headers'], $extraOptions['query'], $extraOptions['json']);

    $response = $client->send(
        $request,
        pathParams: (array) ($decoded['path_params'] ?? []),
        query: (array) ($options['query'] ?? []),
        payload: (array) ($options['json'] ?? []),
        accessToken: $accessToken,
        options: $extraOptions
    );

    fwrite(STDOUT, json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL);
} catch (Throwable $throwable) {
    fwrite(STDERR, sprintf("[%s] %s\n", $throwable::class, $throwable->getMessage()));
    exit(1);
}
