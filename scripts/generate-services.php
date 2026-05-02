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
$servicesRoot = $projectRoot . '/src/Services';
$traitPath = $projectRoot . '/src/Concerns/HasServices.php';

if (!is_file($metadataPath)) {
    fwrite(STDERR, "Metadata file not found: {$metadataPath}" . PHP_EOL);
    exit(1);
}

$metadata = json_decode((string) file_get_contents($metadataPath), true);

if (!is_array($metadata) || !isset($metadata['items']) || !is_array($metadata['items'])) {
    fwrite(STDERR, "Invalid metadata JSON: {$metadataPath}" . PHP_EOL);
    exit(1);
}

removeDirectory($servicesRoot);
ensureDirectory($servicesRoot);
ensureDirectory(dirname($traitPath));

$items = array_values(array_filter($metadata['items'], static fn (mixed $item): bool => is_array($item)));
$products = [];

foreach ($items as $item) {
    $class = (string) ($item['class'] ?? '');

    if ($class === '') {
        continue;
    }

    [$product, $category] = resolveOfficialGroup($item);

    if ($product === 'Auth') {
        continue;
    }

    $relativeClass = preg_replace('/^Lark\\\\Api\\\\/', '', $class);
    $segments = is_string($relativeClass) ? explode('\\', $relativeClass) : [];

    if (count($segments) < 3) {
        continue;
    }

    $requestClass = 'Lark\\Api\\' . implode('\\', $segments);
    $requestShortClass = (string) end($segments);
    $methodName = resolveCallMethod($item, $product, $category);

    $products[$product][$category][$methodName] ??= [
        'requestClass' => $requestClass,
        'requestShortClass' => $requestShortClass,
    ];
}

ksort($products);

$productMethods = [];

foreach ($products as $product => $categories) {
    ksort($categories);

    $serviceShortClass = $product . 'Service';
    $serviceNamespace = 'Lark\\Services';
    $serviceUses = [];
    $serviceMethods = [];

    foreach ($categories as $category => $methods) {
        ksort($methods);

        $resourceShortClass = $category . 'Resource';
        $resourceNamespace = 'Lark\\Services\\' . $product;
        $resourcePath = $servicesRoot . '/' . $product . '/' . $resourceShortClass . '.php';

        ensureDirectory(dirname($resourcePath));
        file_put_contents($resourcePath, renderResourceClass($resourceNamespace, $resourceShortClass, $methods));

        $serviceUses[] = sprintf('use %s\\%s;', $resourceNamespace, $resourceShortClass);
        $serviceMethods[] = renderServiceMethod(lowerCamel($category), $resourceShortClass);
    }

    $servicePath = $servicesRoot . '/' . $serviceShortClass . '.php';
    file_put_contents($servicePath, renderServiceClass($serviceNamespace, $serviceShortClass, $serviceUses, $serviceMethods));

    $productMethods[] = [
        'method' => lowerCamel($product),
        'class' => $serviceShortClass,
    ];
}

file_put_contents($traitPath, renderTrait($productMethods));

fwrite(STDOUT, sprintf(
    'Generated %d services and %d resources.%s',
    count($products),
    array_sum(array_map('count', $products)),
    PHP_EOL
));

/**
 * @param array<string, array<string, array{requestClass:string, requestShortClass:string}>> $methods
 */
function renderResourceClass(string $namespace, string $className, array $methods): string
{
    $uses = [
        'use Lark\\LarkClient;',
    ];
    $methodBlocks = [];

    foreach ($methods as $methodName => $definition) {
        $uses[] = sprintf('use %s;', $definition['requestClass']);
        $methodBlocks[] = renderResourceMethod($methodName, $definition['requestShortClass']);
    }

    sort($uses);

    return <<<PHP
<?php

declare(strict_types=1);

namespace {$namespace};

{$uses[0]}
{$uses[1]}
PHP
        . renderAdditionalUses(array_slice($uses, 2))
        . <<<PHP

final class {$className}
{
    public function __construct(
        private readonly LarkClient \$client
    ) {
    }

PHP
        . implode("\n", $methodBlocks)
        . "}\n";
}

/**
 * @param list<string> \$uses
 */
function renderAdditionalUses(array $uses): string
{
    if ($uses === []) {
        return '';
    }

    return "\n" . implode("\n", $uses);
}

function renderResourceMethod(string $methodName, string $requestShortClass): string
{
    return <<<PHP
    /**
     * @param array<string, mixed> \$pathParams
     * @param array<string, mixed> \$query
     * @param array<string, mixed> \$payload
     * @param array<string, mixed> \$options
     *
     * @return array<string, mixed>
     */
    public function {$methodName}(
        array \$pathParams = [],
        array \$query = [],
        array \$payload = [],
        ?string \$accessToken = null,
        array \$options = []
    ): array {
        return \$this->client->send(
            new {$requestShortClass}(),
            \$pathParams,
            \$query,
            \$payload,
            \$accessToken,
            \$options
        );
    }

PHP;
}

/**
 * @param list<string> $uses
 * @param list<string> $methods
 */
function renderServiceClass(string $namespace, string $className, array $uses, array $methods): string
{
    sort($uses);

    return <<<PHP
<?php

declare(strict_types=1);

namespace {$namespace};

use Lark\\LarkClient;
PHP
        . renderAdditionalUses($uses)
        . <<<PHP

final class {$className}
{
    public function __construct(
        private readonly LarkClient \$client
    ) {
    }

PHP
        . implode("\n", $methods)
        . "}\n";
}

function renderServiceMethod(string $methodName, string $resourceShortClass): string
{
    return <<<PHP
    public function {$methodName}(): {$resourceShortClass}
    {
        return new {$resourceShortClass}(\$this->client);
    }

PHP;
}

/**
 * @param list<array{method:string, class:string}> $productMethods
 */
function renderTrait(array $productMethods): string
{
    $uses = [];
    $methods = [];

    foreach ($productMethods as $productMethod) {
        $uses[] = sprintf('use Lark\\Services\\%s;', $productMethod['class']);
        $methods[] = renderTraitMethod($productMethod['method'], $productMethod['class']);
    }

    sort($uses);

    return <<<PHP
<?php

declare(strict_types=1);

namespace Lark\\Concerns;

PHP
        . implode("\n", $uses)
        . <<<PHP

trait HasServices
{

PHP
        . implode("\n", $methods)
        . "}\n";
}

function renderTraitMethod(string $methodName, string $serviceClass): string
{
    return <<<PHP
    public function {$methodName}(): {$serviceClass}
    {
        return new {$serviceClass}(\$this);
    }

PHP;
}

/**
 * @param array<string, mixed> $item
 */
function resolveCallMethod(array $item, string $product, string $category): string
{
    $method = strtoupper((string) ($item['method'] ?? 'GET'));
    $path = trim((string) ($item['path'] ?? ''), '/');
    $segments = $path === '' ? [] : explode('/', $path);
    $apiSegments = normalizeApiSegments($segments);
    $name = (string) ($item['name'] ?? '');

    if ($apiSegments === []) {
        return defaultCallMethod($method, $name);
    }

    if ($apiSegments !== [] && normalizeSegment($apiSegments[0]) === normalizeSegment($product)) {
        array_shift($apiSegments);
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
        'list',
        'listByNo',
        'logout',
        'mget',
        'match',
        'mergeCells',
        'modify',
        'move',
        'moveDimension',
        'patch',
        'post',
        'preview',
        'process',
        'put',
        'query',
        'reject',
        'refresh',
        'removeComment',
        'reply',
        'resend',
        'remove',
        'replace',
        'reset',
        'resubmit',
        'rollback',
        'search',
        'searchCc',
        'send',
        'setHost',
        'setPermission',
        'sortTabs',
        'start',
        'stop',
        'specifiedRollback',
        'subscribe',
        'transfer',
        'translate',
        'unbindDepartment',
        'uncomplete',
        'unmergeCells',
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

function normalizeGroupName(string $value): string
{
    $value = trim($value);

    if ($value === '') {
        return 'General';
    }

    return pascalCase($value);
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

function lowerCamel(string $value): string
{
    $pascal = pascalCase($value);

    return $pascal === '' ? '' : lcfirst($pascal);
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

function ensureDirectory(string $directory): void
{
    if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) {
        fwrite(STDERR, "Failed to create directory: {$directory}" . PHP_EOL);
        exit(1);
    }
}

function removeDirectory(string $directory): void
{
    if (!is_dir($directory)) {
        return;
    }

    $entries = scandir($directory);

    if ($entries === false) {
        return;
    }

    foreach ($entries as $entry) {
        if ($entry === '.' || $entry === '..') {
            continue;
        }

        $path = $directory . '/' . $entry;

        if (is_dir($path)) {
            removeDirectory($path);
            continue;
        }

        unlink($path);
    }

    rmdir($directory);
}
