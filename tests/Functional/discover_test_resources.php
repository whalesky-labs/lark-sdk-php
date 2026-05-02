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
use Lark\Core\Exception\ApiException;
use Lark\LarkClient;
use Lark\Tests\Fixtures\TestConfigFactory;
use Nyholm\Psr7\Factory\Psr17Factory;

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

$accessToken = TestConfigFactory::accessToken();
$messages = [];
$envSuggestions = [];

if ($accessToken === null) {
    try {
        $tokenResponse = $client->auth()->tenantAccessToken()->create();
        $accessToken = isset($tokenResponse['tenant_access_token']) && is_string($tokenResponse['tenant_access_token'])
            ? $tokenResponse['tenant_access_token']
            : null;

        if ($accessToken !== null) {
            $messages[] = 'Using tenant_access_token fetched from app credentials.';
        }
    } catch (Throwable $throwable) {
        fwrite(STDERR, sprintf("Failed to fetch tenant access token: %s\n", $throwable->getMessage()));
        exit(1);
    }
}

if ($accessToken === null) {
    fwrite(STDERR, "Missing access token. Set LARK_TEST_ACCESS_TOKEN or provide valid app credentials.\n");
    exit(1);
}

$scopeUserIdentifier = null;

$scopeResponse = tryRequest(
    'contact scopes',
    fn (): array => $client->request('GET', '/open-apis/contact/v3/scopes', [], $accessToken),
    $messages
);

if (is_array($scopeResponse['data']['user_ids'] ?? null) && $scopeResponse['data']['user_ids'] !== []) {
    $scopeUserIdentifier = (string) $scopeResponse['data']['user_ids'][0];
    $messages[] = sprintf('Found scoped user identifier: %s', $scopeUserIdentifier);
}

if ($scopeUserIdentifier !== null) {
    $userQuery = str_starts_with($scopeUserIdentifier, 'ou_')
        ? ['user_id_type' => 'open_id']
        : [];

    $userResponse = tryRequest(
        'contact user detail',
        fn (): array => $client->request(
            'GET',
            '/open-apis/contact/v3/users/' . rawurlencode($scopeUserIdentifier),
            ['query' => $userQuery],
            $accessToken
        ),
        $messages
    );

    $user = is_array($userResponse['data']['user'] ?? null) ? $userResponse['data']['user'] : [];

    collectSuggestion($envSuggestions, 'LARK_TEST_USER_ID', stringOrNull($user['user_id'] ?? null));
    collectSuggestion($envSuggestions, 'LARK_TEST_OPEN_ID', stringOrNull($user['open_id'] ?? null));
    collectSuggestion($envSuggestions, 'LARK_TEST_EMAIL', stringOrNull($user['email'] ?? null));
    collectSuggestion($envSuggestions, 'LARK_TEST_MOBILE', stringOrNull($user['mobile'] ?? null));

    if (is_array($user['department_ids'] ?? null) && $user['department_ids'] !== []) {
        collectSuggestion($envSuggestions, 'LARK_TEST_DEPARTMENT_ID', stringOrNull($user['department_ids'][0] ?? null));
    }
}

$chatResponse = tryRequest(
    'im chats',
    fn (): array => $client->request('GET', '/open-apis/im/v1/chats', ['query' => ['page_size' => 1]], $accessToken),
    $messages
);

collectSuggestion($envSuggestions, 'LARK_TEST_CHAT_ID', firstNestedString($chatResponse, ['data', 'items', 0, 'chat_id']));

$calendarResponse = tryRequest(
    'calendar list',
    fn (): array => $client->request('GET', '/open-apis/calendar/v4/calendars', [], $accessToken),
    $messages
);

collectSuggestion($envSuggestions, 'LARK_TEST_CALENDAR_ID', firstNestedString($calendarResponse, ['data', 'items', 0, 'calendar_id']));

$wikiResponse = tryRequest(
    'wiki spaces',
    fn (): array => $client->request('GET', '/open-apis/wiki/v2/spaces', [], $accessToken),
    $messages
);

collectSuggestion($envSuggestions, 'LARK_TEST_WIKI_NODE_TOKEN', firstNestedString($wikiResponse, ['data', 'items', 0, 'node_token']));

fwrite(STDOUT, "Suggested .env values\n");
fwrite(STDOUT, "---------------------\n");

foreach ($envSuggestions as $key => $value) {
    fwrite(STDOUT, sprintf("%s=%s\n", $key, $value));
}

fwrite(STDOUT, "\nDiagnostics\n");
fwrite(STDOUT, "-----------\n");

foreach ($messages as $message) {
    fwrite(STDOUT, sprintf("- %s\n", $message));
}

/**
 * @param list<string> $messages
 *
 * @return array<string, mixed>
 */
function tryRequest(string $label, callable $request, array &$messages): array
{
    try {
        /** @var array<string, mixed> $response */
        $response = $request();
        $messages[] = sprintf('%s: ok', $label);

        return $response;
    } catch (ApiException $exception) {
        $messages[] = sprintf('%s: %s', $label, $exception->getMessage());
    } catch (Throwable $throwable) {
        $messages[] = sprintf('%s: %s', $label, $throwable->getMessage());
    }

    return [];
}

/**
 * @param array<string, string> $envSuggestions
 */
function collectSuggestion(array &$envSuggestions, string $key, ?string $value): void
{
    if ($value === null || trim($value) === '') {
        return;
    }

    $envSuggestions[$key] = $value;
}

function stringOrNull(mixed $value): ?string
{
    if (!is_scalar($value)) {
        return null;
    }

    $string = trim((string) $value);

    return $string === '' ? null : $string;
}

/**
 * @param array<string, mixed> $data
 * @param list<int|string> $path
 */
function firstNestedString(array $data, array $path): ?string
{
    $current = $data;

    foreach ($path as $segment) {
        if (!is_array($current) || !array_key_exists($segment, $current)) {
            return null;
        }

        $current = $current[$segment];
    }

    return stringOrNull($current);
}
