<?php

declare(strict_types=1);

const API_INDEX_PATH = __DIR__ . '/data/official-api-index.json';
const API_DETAILS_OUTPUT_PATH = __DIR__ . '/data/official-api-details.json';
const MANUAL_DOC_URLS_PATH = __DIR__ . '/data/manual-api-doc-urls.txt';
const HTTP_TIMEOUT_SECONDS = 15;

if (!file_exists(API_INDEX_PATH)) {
    fwrite(STDERR, "API index not found. Run fetch_official_api_index.php first." . PHP_EOL);
    exit(1);
}

$index = json_decode((string) file_get_contents(API_INDEX_PATH), true);

if (!is_array($index) || !isset($index['items']) || !is_array($index['items'])) {
    fwrite(STDERR, "Invalid API index JSON." . PHP_EOL);
    exit(1);
}

$manualOnly = in_array('--manual-only', $argv, true);
$items = $manualOnly ? [] : $index['items'];
$manualDocUrls = [];

if (file_exists(MANUAL_DOC_URLS_PATH)) {
    $lines = file(MANUAL_DOC_URLS_PATH, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if (is_array($lines)) {
        foreach ($lines as $line) {
            $trimmed = trim($line);

            if ($trimmed === '' || str_starts_with($trimmed, '#')) {
                continue;
            }

            $manualDocUrls[] = $trimmed;
        }
    }
}

foreach ($manualDocUrls as $manualDocUrl) {
    $markdownUrl = str_ends_with($manualDocUrl, '.md') ? $manualDocUrl : $manualDocUrl . '.md';
    $markdown = fetchRemote($markdownUrl);

    if ($markdown === false) {
        continue;
    }

    $path = matchField($markdown, '/HTTP URL \| https:\/\/open\.feishu\.cn(?<value>\/open-apis\/[^\n]+)/');
    $method = matchField($markdown, '/HTTP Method \| (?<value>GET|POST|PUT|PATCH|DELETE)/');
    $title = matchField($markdown, '/^# (?<value>[^\n]+)/m');

    if ($path === null || $method === null || $title === null) {
        continue;
    }

    $items[] = [
        'name' => $title,
        'method' => $method,
        'path' => $path,
        'doc_url' => str_replace('.md', '', $markdownUrl),
        'description' => '',
        'source' => 'manual-official-doc-url',
    ];
}

$details = [];
$seen = [];

foreach ($items as $item) {
    if (!is_array($item) || !isset($item['doc_url'], $item['path'], $item['method'])) {
        continue;
    }

    $docUrl = (string) $item['doc_url'];
    $markdownUrl = str_ends_with($docUrl, '.md') ? $docUrl : $docUrl . '.md';
    $markdown = fetchRemote($markdownUrl);

    if ($markdown === false) {
        continue;
    }

    $detailKey = $item['method'] . ' ' . $item['path'];

    if (isset($seen[$detailKey])) {
        continue;
    }

    $seen[$detailKey] = true;

    $details[] = [
        'name' => $item['name'],
        'method' => $item['method'],
        'path' => $item['path'],
        'doc_url' => $docUrl,
        'markdown_url' => $markdownUrl,
        'http_url' => matchField($markdown, '/HTTP URL \| (?<value>https:\/\/open\.feishu\.cn\/open-apis\/[^\n]+)/'),
        'http_method' => matchField($markdown, '/HTTP Method \| (?<value>GET|POST|PUT|PATCH|DELETE)/'),
        'request_headers' => parseMarkdownTableSection($markdown, '### 请求头'),
        'query_parameters' => parseMarkdownTableSection($markdown, '### 查询参数'),
        'body_parameters' => parseMarkdownTableSection($markdown, '### 请求体'),
        'raw_markdown_excerpt' => excerpt($markdown),
    ];
}

$payload = [
    'generated_at' => gmdate('c'),
    'source_index' => API_INDEX_PATH,
    'count' => count($details),
    'items' => $details,
];

$json = json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

if ($json === false) {
    fwrite(STDERR, "Failed to encode API details JSON." . PHP_EOL);
    exit(1);
}

file_put_contents(API_DETAILS_OUTPUT_PATH, $json . PHP_EOL);

fwrite(STDOUT, sprintf("Generated %d API detail records: %s%s", count($details), API_DETAILS_OUTPUT_PATH, PHP_EOL));

function matchField(string $markdown, string $pattern): ?string
{
    if (!preg_match($pattern, $markdown, $matches)) {
        return null;
    }

    return trim($matches['value']);
}

/**
 * @return list<array<string, string>>
 */
function parseMarkdownTableSection(string $markdown, string $sectionTitle): array
{
    $position = mb_strpos($markdown, $sectionTitle);

    if ($position === false) {
        return [];
    }

    $section = mb_substr($markdown, $position);
    $lines = preg_split('/\R/u', $section);

    if (!is_array($lines)) {
        return [];
    }

    $rows = [];
    $collect = false;

    foreach ($lines as $line) {
        if (!$collect) {
            if (str_starts_with($line, '名称 | 类型 | 必填 | 描述')) {
                $collect = true;
            }

            continue;
        }

        if ($line === '' || str_starts_with($line, '### ') || str_starts_with($line, '## ')) {
            break;
        }

        if (str_starts_with($line, '---|---|---|---')) {
            continue;
        }

        $parts = array_map(static fn (string $value): string => trim($value), explode('|', $line));

        if (count($parts) < 4) {
            continue;
        }

        $rows[] = [
            'name' => $parts[0],
            'type' => $parts[1] ?? '',
            'required' => $parts[2] ?? '',
            'description' => implode(' | ', array_slice($parts, 3)),
        ];
    }

    return $rows;
}

function excerpt(string $markdown, int $length = 500): string
{
    $excerpt = trim(preg_replace('/\s+/u', ' ', $markdown) ?? $markdown);

    if (mb_strlen($excerpt) <= $length) {
        return $excerpt;
    }

    return mb_substr($excerpt, 0, $length) . '...';
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
