<?php

declare(strict_types=1);

const API_SITEMAP_URL = 'https://feishu.apifox.cn/sitemap.xml';
const OUTPUT_API_DIR = __DIR__ . '/../src/Api';
const OUTPUT_METADATA_PATH = __DIR__ . '/data/generated-api-files.json';
const HTTP_TIMEOUT_SECONDS = 20;

$apiPageUrls = fetchApiPageUrls();

if ($apiPageUrls === []) {
    fwrite(STDERR, "No API pages found from sitemap." . PHP_EOL);
    exit(1);
}

removeDirectory(OUTPUT_API_DIR);
mkdir(OUTPUT_API_DIR, 0777, true);

$generated = [];
$classNames = [];

foreach ($apiPageUrls as $apiPageUrl) {
    $html = fetchRemote($apiPageUrl);

    if ($html === false) {
        continue;
    }

    $decoded = stripcslashes(html_entity_decode($html, ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    $api = extractApiDefinition($decoded, $apiPageUrl);

    if ($api === null) {
        continue;
    }

    $baseClassName = classNameFromPath($api['path']);
    $className = $baseClassName;

    if (isset($classNames[$className])) {
        $className = $baseClassName . pascalCase(strtolower($api['method']));
    }

    if (isset($classNames[$className])) {
        $className = $baseClassName . pascalCase(strtolower($api['method'])) . substr(sha1($api['method'] . $api['path']), 0, 8);
    }

    $classNames[$className] = true;

    [$namespace, $directory] = namespaceAndDirectory($api['path']);
    $filePath = $directory . '/' . $className . '.php';

    if (!is_dir(dirname($filePath))) {
        mkdir(dirname($filePath), 0777, true);
    }

    file_put_contents($filePath, renderApiClass($namespace, $className, $api));

    $generated[] = [
        ...$api,
        'class' => 'Lark\\Api\\' . $namespace . '\\' . $className,
        'file' => normalizePath($filePath),
    ];
}

usort($generated, static fn (array $left, array $right): int => [$left['path'], $left['method']] <=> [$right['path'], $right['method']]);

if (!is_dir(dirname(OUTPUT_METADATA_PATH))) {
    mkdir(dirname(OUTPUT_METADATA_PATH), 0777, true);
}

$metadata = [
    'generated_at' => gmdate('c'),
    'source' => API_SITEMAP_URL,
    'sitemap_api_pages' => count($apiPageUrls),
    'generated_count' => count($generated),
    'items' => $generated,
];

$json = json_encode($metadata, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

if ($json === false) {
    fwrite(STDERR, "Failed to encode generated API metadata." . PHP_EOL);
    exit(1);
}

file_put_contents(OUTPUT_METADATA_PATH, $json . PHP_EOL);

fwrite(STDOUT, sprintf(
    "Generated %d API files from %d API pages.%s",
    count($generated),
    count($apiPageUrls),
    PHP_EOL
));

/**
 * @return list<string>
 */
function fetchApiPageUrls(): array
{
    $sitemap = fetchRemote(API_SITEMAP_URL);

    if ($sitemap === false) {
        return [];
    }

    preg_match_all('/https:\/\/feishu\.apifox\.cn\/api-\d+/', $sitemap, $matches);

    return array_values(array_unique($matches[0] ?? []));
}

/**
 * @return array{name: string, method: string, path: string, doc_url: string|null, source_url: string, headers: array<string, string>}|null
 */
function extractApiDefinition(string $html, string $sourceUrl): ?array
{
    $name = matchFirst($html, '/<h1[^>]*title="(?<value>[^"]+)"[^>]*>/u')
        ?? matchFirst($html, '/<title>(?<value>.*?) - 飞书 API<\/title>/u')
        ?? 'Unknown API';

    $methodAndPath = null;

    if (preg_match('/<span class="truncate">(?<method>GET|POST|PUT|PATCH|DELETE)<\/span>.*?<span class="cursor-pointer[^"]*"[^>]*>(?<path>\/[^<]+)<\/span>/su', $html, $matches)) {
        $methodAndPath = [
            'method' => $matches['method'],
            'path' => $matches['path'],
        ];
    }

    if ($methodAndPath === null && preg_match("/curl --location --request (?<method>GET|POST|PUT|PATCH|DELETE) 'https:\/\/open\.feishu\.cn(?<path>\/open-apis\/[^']+)'/u", $html, $matches)) {
        $methodAndPath = [
            'method' => $matches['method'],
            'path' => $matches['path'],
        ];
    }

    if ($methodAndPath === null) {
        return null;
    }

    $path = normalizeApiPath($methodAndPath['path']);

    if (!str_starts_with($path, '/open-apis/')) {
        $path = '/open-apis' . $path;
    }

    $docUrl = matchFirst($html, '/https:\/\/open\.feishu\.cn\/document\/[^"\\\\<\s]+/u');
    $headers = [];

    if (str_contains($html, 'Content-Type') && str_contains($html, 'application/json; charset=utf-8')) {
        $headers['Content-Type'] = 'application/json; charset=utf-8';
    } elseif (str_contains($html, 'Content-Type') && str_contains($html, 'application/json')) {
        $headers['Content-Type'] = 'application/json';
    }

    return [
        'name' => html_entity_decode($name, ENT_QUOTES | ENT_HTML5, 'UTF-8'),
        'method' => $methodAndPath['method'],
        'path' => $path,
        'doc_url' => $docUrl,
        'source_url' => $sourceUrl,
        'headers' => $headers,
    ];
}

function normalizeApiPath(string $path): string
{
    $path = trim($path);
    $path = preg_replace('/\{([^}]+)\}/', ':$1', $path) ?? $path;
    $path = preg_replace('#(?<!:)//+#', '/', $path) ?? $path;

    return $path;
}

/**
 * @return array{0: string, 1: string}
 */
function namespaceAndDirectory(string $path): array
{
    $segments = pathSegments($path);
    $product = $segments[0] ?? 'OpenApi';
    $resource = resourceSegment($segments);

    $namespace = pascalCase($product) . '\\' . pascalCase(singularize($resource));
    $directory = OUTPUT_API_DIR . '/' . str_replace('\\', '/', $namespace);

    return [$namespace, $directory];
}

function resourceSegment(array $segments): string
{
    foreach ($segments as $index => $segment) {
        if (preg_match('/^v\d+$/', $segment) === 1) {
            return $segments[$index + 1] ?? $segments[0] ?? 'resource';
        }
    }

    return $segments[1] ?? $segments[0] ?? 'resource';
}

function classNameFromPath(string $path): string
{
    $segments = pathSegments($path);
    $parts = [];

    foreach ($segments as $segment) {
        if ($segment === '') {
            continue;
        }

        $parts[] = pascalCase(str_starts_with($segment, ':') ? substr($segment, 1) : $segment);
    }

    return implode('', $parts);
}

/**
 * @return list<string>
 */
function pathSegments(string $path): array
{
    $path = preg_replace('#^/open-apis/#', '', $path) ?? $path;

    return array_values(array_filter(explode('/', trim($path, '/')), static fn (string $segment): bool => $segment !== ''));
}

function pascalCase(string $value): string
{
    $value = preg_replace('/[^A-Za-z0-9]+/', ' ', $value) ?? $value;
    $value = str_replace(' ', '', ucwords(strtolower($value)));

    if ($value === '') {
        return 'Resource';
    }

    if (ctype_digit($value[0])) {
        return 'V' . $value;
    }

    return $value;
}

function singularize(string $value): string
{
    if (str_ends_with($value, 'ies')) {
        return substr($value, 0, -3) . 'y';
    }

    if (str_ends_with($value, 'ses')) {
        return substr($value, 0, -2);
    }

    if (str_ends_with($value, 's') && !str_ends_with($value, 'ss')) {
        return substr($value, 0, -1);
    }

    return $value;
}

/**
 * @param array{name: string, method: string, path: string, doc_url: string|null, source_url: string, headers: array<string, string>} $api
 */
function renderApiClass(string $namespace, string $className, array $api): string
{
    $headers = renderHeaders($api['headers']);
    $docUrl = $api['doc_url'] ?? $api['source_url'];
    $escapedName = str_replace(['*/'], ['* /'], $api['name']);

    return <<<PHP
<?php

declare(strict_types=1);

namespace Lark\\Api\\{$namespace};

use Lark\\Request\\RestRequest;

/**
 * {$escapedName}
 *
 * @see {$docUrl}
 */
final class {$className} extends RestRequest
{
    protected string \$apiUri = '{$api['path']}';

    protected string \$httpMethod = '{$api['method']}';
{$headers}}

PHP;
}

/**
 * @param array<string, string> $headers
 */
function renderHeaders(array $headers): string
{
    if ($headers === []) {
        return '';
    }

    $lines = [
        '',
        '    protected array $headers = [',
    ];

    foreach ($headers as $name => $value) {
        $lines[] = sprintf("        '%s' => '%s',", addslashes($name), addslashes($value));
    }

    $lines[] = '    ];';
    $lines[] = '';

    return implode(PHP_EOL, $lines);
}

function matchFirst(string $subject, string $pattern): ?string
{
    if (!preg_match($pattern, $subject, $matches)) {
        return null;
    }

    return trim($matches['value']);
}

function fetchRemote(string $url): string|false
{
    $context = stream_context_create([
        'http' => [
            'timeout' => HTTP_TIMEOUT_SECONDS,
            'header' => "User-Agent: lark-sdk-php-generator/1.0\r\n",
        ],
    ]);

    return @file_get_contents($url, false, $context);
}

function removeDirectory(string $directory): void
{
    if (!is_dir($directory)) {
        return;
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );

    foreach ($iterator as $fileInfo) {
        if ($fileInfo->isDir()) {
            rmdir($fileInfo->getPathname());
            continue;
        }

        unlink($fileInfo->getPathname());
    }

    rmdir($directory);
}

function normalizePath(string $path): string
{
    return str_replace(dirname(__DIR__) . '/', '', $path);
}
