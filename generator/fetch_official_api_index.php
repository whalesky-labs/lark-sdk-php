<?php

declare(strict_types=1);

const FEISHU_API_INDEX_URL = 'https://feishu.apifox.cn/doc-1939273';
const OUTPUT_PATH = __DIR__ . '/data/official-api-index.json';

$html = @file_get_contents(FEISHU_API_INDEX_URL);

if ($html === false) {
    fwrite(STDERR, "Failed to fetch official API index: " . FEISHU_API_INDEX_URL . PHP_EOL);
    exit(1);
}

$decoded = html_entity_decode($html, ENT_QUOTES | ENT_HTML5, 'UTF-8');
$normalized = stripcslashes($decoded);

$pattern = '/\[(?<name>[^\]]+)\]\((?<doc>https:\/\/open\.feishu\.cn\/document[^)]+)\)(?<method>GET|POST|PUT|PATCH|DELETE)(?<path>\/open-apis\/[^|\s<"]+)\s*\|\s*(?<description>[^|]+?)\s*\|/u';

preg_match_all($pattern, $normalized, $matches, PREG_SET_ORDER);

$items = [];
$seen = [];

foreach ($matches as $match) {
    $key = $match['method'] . ' ' . $match['path'];

    if (isset($seen[$key])) {
        continue;
    }

    $seen[$key] = true;

    $items[] = [
        'name' => trim($match['name']),
        'method' => trim($match['method']),
        'path' => trim($match['path']),
        'doc_url' => trim($match['doc']),
        'description' => trim(preg_replace('/\s+/u', ' ', $match['description']) ?? $match['description']),
        'source' => FEISHU_API_INDEX_URL,
    ];
}

usort($items, static function (array $left, array $right): int {
    return [$left['path'], $left['method']] <=> [$right['path'], $right['method']];
});

if (!is_dir(dirname(OUTPUT_PATH))) {
    mkdir(dirname(OUTPUT_PATH), 0777, true);
}

$payload = [
    'generated_at' => gmdate('c'),
    'source' => FEISHU_API_INDEX_URL,
    'count' => count($items),
    'items' => $items,
];

$json = json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

if ($json === false) {
    fwrite(STDERR, "Failed to encode API index JSON." . PHP_EOL);
    exit(1);
}

file_put_contents(OUTPUT_PATH, $json . PHP_EOL);

fwrite(STDOUT, sprintf("Generated %d API records: %s%s", count($items), OUTPUT_PATH, PHP_EOL));
