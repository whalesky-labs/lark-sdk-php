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

$projectRoot = dirname(__DIR__);
$metadataPath = $projectRoot . '/generator/data/generated-api-files.json';
$outputPath = $projectRoot . '/API_MAPPING.md';

if (!is_file($metadataPath)) {
    fwrite(STDERR, "Metadata file not found: {$metadataPath}" . PHP_EOL);
    exit(1);
}

$metadata = json_decode((string) file_get_contents($metadataPath), true);

if (!is_array($metadata) || !isset($metadata['items']) || !is_array($metadata['items'])) {
    fwrite(STDERR, "Invalid metadata JSON: {$metadataPath}" . PHP_EOL);
    exit(1);
}

$items = array_values(array_filter($metadata['items'], static fn (mixed $item): bool => is_array($item)));
$groups = [];

foreach ($items as $item) {
    [$product, $category] = resolveOfficialGroup($item);
    $groups[$product][$category][] = $item;
}

ksort($groups);

foreach ($groups as $product => $categories) {
    ksort($categories);

    foreach ($categories as $category => $groupItems) {
        usort($groupItems, static function (array $left, array $right): int {
            return [$left['name'] ?? '', $left['path'] ?? '', $left['method'] ?? '']
                <=> [$right['name'] ?? '', $right['path'] ?? '', $right['method'] ?? ''];
        });

        $groups[$product][$category] = $groupItems;
    }
}

$lines = [];
$lines[] = '# API Mapping';

foreach ($groups as $product => $categories) {
    $lines[] = '';
    $lines[] = sprintf('## %s', $product);

    foreach ($categories as $category => $groupItems) {
        $lines[] = '';
        $lines[] = sprintf('### %s', $category);
        $lines[] = '';
        $lines[] = '| API Name | Call |';
        $lines[] = '| --- | --- |';

        foreach ($groupItems as $item) {
            $name = escapePipe((string) ($item['name'] ?? ''));
            $call = sprintf('`%s`', escapeBackticks(resolveCallExpression($item, $product, $category)));

            $lines[] = sprintf('| %s | %s |', $name, $call);
        }
    }
}

$content = implode(PHP_EOL, $lines) . PHP_EOL;

file_put_contents($outputPath, $content);

fwrite(STDOUT, sprintf('API mapping generated: %s%s', $outputPath, PHP_EOL));

function escapePipe(string $value): string
{
    return str_replace('|', '\|', $value);
}

function escapeBackticks(string $value): string
{
    return str_replace('`', '\`', $value);
}

/**
 * @param array<string, mixed> $item
 *
 * @return array{0: string, 1: string}
 */
function resolveOfficialGroup(array $item): array
{
    $docUrl = (string) ($item['doc_url'] ?? '');
    $fileGroup = resolveFileGroup($item);

    if (preg_match('#/reference/([^/]+)/([^/]+)(?:/|$)#', $docUrl, $matches) === 1) {
        $product = normalizeGroupName((string) preg_replace('/-v\d+$/', '', $matches[1]));
        $category = normalizeGroupName($matches[2]);

        if (normalizeSegment($product) === normalizeSegment($category)
            && normalizeSegment($fileGroup[1]) !== normalizeSegment($category)) {
            return [$product, $fileGroup[1]];
        }

        return [$product, $category];
    }

    return $fileGroup;
}

function normalizeGroupName(string $value): string
{
    $value = trim($value);

    if ($value === '') {
        return 'General';
    }

    return pascalCase($value);
}

/**
 * @param array<string, mixed> $item
 */
function resolveCallExpression(array $item, string $product, string $category): string
{
    return sprintf(
        '$client->%s()->%s()->%s()',
        lowerCamel($product),
        lowerCamel($category),
        resolveCallMethod($item, $category)
    );
}

/**
 * @param array<string, mixed> $item
 */
function resolveCallMethod(array $item, string $category): string
{
    $method = strtoupper((string) ($item['method'] ?? 'GET'));
    $path = trim((string) ($item['path'] ?? ''), '/');
    $segments = $path === '' ? [] : explode('/', $path);
    $apiSegments = normalizeApiSegments($segments);
    $name = (string) ($item['name'] ?? '');

    if ($apiSegments === []) {
        return defaultCallMethod($method, $name);
    }

    $resourceSegment = array_shift($apiSegments);
    $normalizedCategory = normalizeSegment($category);

    if ($resourceSegment !== null && normalizeSegment($resourceSegment) !== $normalizedCategory) {
        array_unshift($apiSegments, $resourceSegment);
    }

    $staticSegments = array_values(array_filter(
        $apiSegments,
        static fn (string $segment): bool => $segment !== '' && !str_starts_with($segment, ':')
    ));

    if ($staticSegments === []) {
        return defaultCallMethod($method, $name);
    }

    $action = lowerCamel(implode('', array_map(
        static fn (string $segment): string => normalizeGroupName($segment),
        $staticSegments
    )));

    if (isVerbLikeAction($action)) {
        return normalizeCallAction($action);
    }

    return normalizeCallAction(semanticPrefix($method) . ucfirst($action));
}

function defaultCallMethod(string $method, string $name = ''): string
{
    if (preg_match('/^(获取|查询|列出|查看|读取|校验)/u', $name) === 1) {
        return 'get';
    }

    if (preg_match('/^(搜索)/u', $name) === 1) {
        return 'search';
    }

    if (preg_match('/^(创建|新增)/u', $name) === 1) {
        return 'create';
    }

    if (preg_match('/^(删除)/u', $name) === 1) {
        return 'delete';
    }

    return match ($method) {
        'POST' => 'create',
        'PUT' => 'update',
        'PATCH' => 'patch',
        'DELETE' => 'delete',
        default => 'get',
    };
}

function semanticPrefix(string $method): string
{
    return match ($method) {
        'POST' => 'create',
        'PUT' => 'update',
        'PATCH' => 'patch',
        'DELETE' => 'delete',
        default => 'get',
    };
}

function isVerbLikeAction(string $action): bool
{
    static $verbs = [
        'add',
        'addSign',
        'answerUserQuery',
        'apply',
        'approve',
        'batchAdd',
        'batchClose',
        'batchCreate',
        'batchDelete',
        'batchGet',
        'batchOpen',
        'batchRemove',
        'batchUpdate',
        'bindDepartment',
        'cancel',
        'cc',
        'check',
        'complete',
        'copy',
        'create',
        'del',
        'delete',
        'detect',
        'download',
        'end',
        'extract',
        'find',
        'findByDepartment',
        'get',
        'getActiveMeeting',
        'getDaily',
        'getNode',
        'getTopUser',
        'highlight',
        'invite',
        'kickout',
        'listByNo',
        'logout',
        'match',
        'mget',
        'modify',
        'move',
        'patch',
        'post',
        'preview',
        'process',
        'put',
        'query',
        'reject',
        'remove',
        'removeComment',
        'reply',
        'resend',
        'reset',
        'resubmit',
        'rollback',
        'search',
        'searchCc',
        'send',
        'setHost',
        'setPermission',
        'sortTabs',
        'specifiedRollback',
        'start',
        'stop',
        'subscribe',
        'transfer',
        'translate',
        'unbindDepartment',
        'uncomplete',
        'unsubscribe',
        'update',
        'updateTitle',
        'updateVisibility',
        'upload',
    ];

    foreach ($verbs as $verb) {
        if ($action === $verb || str_starts_with($action, $verb)) {
            return true;
        }
    }

    return false;
}

function normalizeCallAction(string $action): string
{
    $action = preg_replace('/Simplelist$/', 'SimpleList', $action) ?? $action;

    $patterns = [
        '/^create(.+)BatchAdd$/',
        '/^create(.+)BatchRemove$/',
        '/^create(.+)BatchDelete$/',
        '/^create(.+)BatchCreate$/',
        '/^create(.+)BatchUpdate$/',
        '/^create(.+)Add$/',
        '/^create(.+)Remove$/',
        '/^create(.+)Delete$/',
        '/^create(.+)Update$/',
        '/^get(.+)Get$/',
        '/^getList(.+)$/',
    ];

    $replacements = [
        'batchAdd$1',
        'batchRemove$1',
        'batchDelete$1',
        'batchCreate$1',
        'batchUpdate$1',
        'add$1',
        'remove$1',
        'delete$1',
        'update$1',
        'get$1',
        'list$1',
    ];

    return preg_replace($patterns, $replacements, $action) ?? $action;
}

function lowerCamel(string $value): string
{
    $value = pascalCase($value);

    return lcfirst($value);
}

function normalizeSegment(string $value): string
{
    $words = splitWords($value);
    $normalized = implode('_', $words);

    return preg_replace('/s$/', '', $normalized) ?? $normalized;
}

/**
 * @param array<string, mixed> $item
 *
 * @return array{0: string, 1: string}
 */
function resolveFileGroup(array $item): array
{
    $file = (string) ($item['file'] ?? '');
    $segments = explode('/', str_replace('\\', '/', $file));
    $apiIndex = array_search('Api', $segments, true);

    if ($apiIndex === false) {
        return ['Unknown', 'General'];
    }

    $product = $segments[$apiIndex + 1] ?? 'Unknown';
    $category = $segments[$apiIndex + 2] ?? 'General';

    return [normalizeGroupName($product), normalizeGroupName($category)];
}

/**
 * @param list<string> $segments
 *
 * @return list<string>
 */
function normalizeApiSegments(array $segments): array
{
    if ($segments === []) {
        return [];
    }

    if (($segments[0] ?? null) === 'open-apis') {
        array_shift($segments);
    }

    array_shift($segments);

    while ($segments !== []) {
        $current = $segments[0];

        if ($current === 'openapi' || preg_match('/^v\d+$/i', $current) === 1) {
            array_shift($segments);
            continue;
        }

        break;
    }

    return array_values($segments);
}

function pascalCase(string $value): string
{
    $words = splitWords($value);

    if ($words === []) {
        return 'General';
    }

    return implode('', array_map(
        static fn (string $word): string => ucfirst($word),
        $words
    ));
}

/**
 * @return list<string>
 */
function splitWords(string $value): array
{
    $normalized = preg_replace('/(?<!^)[A-Z]/', '_$0', $value) ?? $value;
    $normalized = strtolower($normalized);
    $normalized = preg_replace('/[^a-z0-9]+/', '_', $normalized) ?? $normalized;

    return array_values(array_filter(
        explode('_', trim($normalized, '_')),
        static fn (string $part): bool => $part !== ''
    ));
}
