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
$phpBinary = PHP_BINARY;
$phpUnit = $projectRoot . '/vendor/bin/phpunit';
$reportPath = $argv[1] ?? ($projectRoot . '/test-report.html');
$artifactsDirectory = $projectRoot . '/.test-artifacts';

resetArtifactsDirectory($artifactsDirectory);
ensureReportDirectory(dirname($reportPath));

$suites = [
    [
        'key' => 'unit',
        'label' => '单元测试',
        'command' => [$phpBinary, $phpUnit, '--configuration', $projectRoot . '/phpunit.xml.dist', '--testsuite', 'unit'],
        'description' => 'PHPUnit unit test suite',
    ],
    [
        'key' => 'integration',
        'label' => '集成测试',
        'command' => [$phpBinary, $phpUnit, '--configuration', $projectRoot . '/phpunit.xml.dist', '--testsuite', 'integration'],
        'description' => 'PHPUnit integration test suite',
    ],
    [
        'key' => 'functional',
        'label' => '功能测试',
        'command' => [$phpBinary, $phpUnit, '--configuration', $projectRoot . '/phpunit.xml.dist', '--testsuite', 'functional'],
        'description' => 'PHPUnit functional test suite',
    ],
];

$suiteResults = [];
$overallExitCode = 0;

foreach ($suites as $suite) {
    $result = runCommand($suite['command'], $projectRoot);

    $suiteResults[] = [
        'key' => $suite['key'],
        'label' => $suite['label'],
        'description' => $suite['description'],
        'command' => implode(' ', array_map(escapeShellToken(...), $suite['command'])),
        'exitCode' => $result['exitCode'],
        'output' => $result['output'],
        'metrics' => extractMetrics($result['output']),
        'status' => determineSuiteStatus($result['exitCode'], $result['output']),
    ];

    if ($result['exitCode'] !== 0) {
        $overallExitCode = $result['exitCode'];
    }
}

renderConsoleSummary($suiteResults);

$html = renderReport(
    generatedAt: date('Y-m-d H:i:s'),
    phpVersion: PHP_VERSION,
    phpunitVersion: detectPhpUnitVersion($suiteResults),
    overallStatus: determineOverallStatus($suiteResults, $overallExitCode),
    overallExitCode: $overallExitCode,
    reportPath: $reportPath,
    suiteResults: $suiteResults
);

file_put_contents($reportPath, $html);

fwrite(STDOUT, sprintf('HTML report generated: %s%s', $reportPath, PHP_EOL));

exit($overallExitCode);

/**
 * @param list<string> $command
 *
 * @return array{exitCode:int, output:string}
 */
function runCommand(array $command, string $cwd): array
{
    $descriptorSpec = [
        0 => ['pipe', 'r'],
        1 => ['pipe', 'w'],
        2 => ['pipe', 'w'],
    ];

    $env = [];

    foreach (array_merge($_ENV, $_SERVER) as $key => $value) {
        if (!is_string($key)) {
            continue;
        }

        if (!is_scalar($value) && $value !== null) {
            continue;
        }

        $env[$key] = $value === null ? '' : (string) $value;
    }

    $process = proc_open($command, $descriptorSpec, $pipes, $cwd, $env);

    if (!is_resource($process)) {
        fwrite(STDERR, 'Failed to start test process.' . PHP_EOL);
        exit(1);
    }

    fclose($pipes[0]);

    $stdout = stream_get_contents($pipes[1]);
    $stderr = stream_get_contents($pipes[2]);

    fclose($pipes[1]);
    fclose($pipes[2]);

    $exitCode = proc_close($process);
    $output = trim((string) $stdout . (($stderr !== '' && $stderr !== false) ? PHP_EOL . $stderr : ''));

    return [
        'exitCode' => $exitCode,
        'output' => $output === '' ? 'No output captured.' : $output,
    ];
}

function resetArtifactsDirectory(string $directory): void
{
    if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) {
        fwrite(STDERR, 'Failed to prepare test artifacts directory.' . PHP_EOL);
        exit(1);
    }
}

function ensureReportDirectory(string $directory): void
{
    if (is_dir($directory)) {
        return;
    }

    if (!mkdir($directory, 0777, true) && !is_dir($directory)) {
        fwrite(STDERR, 'Failed to prepare report directory.' . PHP_EOL);
        exit(1);
    }
}

/**
 * @return array{tests:int|null, assertions:int|null, skipped:int|null, failures:int|null, errors:int|null}
 */
function extractMetrics(string $output): array
{
    $tests = extractMetric($output, 'Tests');
    $assertions = extractMetric($output, 'Assertions');
    $skipped = extractMetric($output, 'Skipped');
    $failures = extractMetric($output, 'Failures');
    $errors = extractMetric($output, 'Errors');

    if (($tests === null || $assertions === null)
        && preg_match('/OK \((\d+) tests?, (\d+) assertions?\)/', $output, $matches) === 1) {
        $tests ??= (int) $matches[1];
        $assertions ??= (int) $matches[2];
    }

    return [
        'tests' => $tests,
        'assertions' => $assertions,
        'skipped' => $skipped,
        'failures' => $failures,
        'errors' => $errors,
    ];
}

function extractMetric(string $output, string $label): ?int
{
    if (!preg_match('/' . preg_quote($label, '/') . ':\s+(\d+)/', $output, $matches)) {
        return null;
    }

    return (int) $matches[1];
}

function determineSuiteStatus(int $exitCode, string $output): string
{
    if ($exitCode !== 0) {
        return 'FAILED';
    }

    if (str_contains($output, 'No tests executed!')) {
        return 'EMPTY';
    }

    if (preg_match('/Skipped:\s+([1-9]\d*)/', $output) === 1) {
        return 'SKIPPED';
    }

    return 'PASSED';
}

/**
 * @param list<array<string, mixed>> $suiteResults
 */
function determineOverallStatus(array $suiteResults, int $overallExitCode): string
{
    if ($overallExitCode !== 0) {
        return 'FAILED';
    }

    foreach ($suiteResults as $suiteResult) {
        if (($suiteResult['status'] ?? '') === 'SKIPPED') {
            return 'PASSED WITH SKIPS';
        }
    }

    foreach ($suiteResults as $suiteResult) {
        if (($suiteResult['status'] ?? '') === 'EMPTY') {
            return 'PASSED WITH EMPTY SUITES';
        }
    }

    return 'PASSED';
}

/**
 * @param list<array<string, mixed>> $suiteResults
 */
function detectPhpUnitVersion(array $suiteResults): string
{
    foreach ($suiteResults as $suiteResult) {
        if (preg_match('/PHPUnit\s+([0-9.]+)/', (string) $suiteResult['output'], $matches) === 1) {
            return $matches[1];
        }
    }

    return 'unknown';
}

/**
 * @param list<array<string, mixed>> $suiteResults
 */
function renderConsoleSummary(array $suiteResults): void
{
    foreach ($suiteResults as $suiteResult) {
        fwrite(STDOUT, "=== {$suiteResult['label']} ===" . PHP_EOL);
        fwrite(STDOUT, (string) $suiteResult['output'] . PHP_EOL . PHP_EOL);
    }
}

function escapeShellToken(string $token): string
{
    if (preg_match('/^[a-zA-Z0-9_:\\/.=-]+$/', $token) === 1) {
        return $token;
    }

    return "'" . str_replace("'", "'\\''", $token) . "'";
}

/**
 * @param list<array{
 *     key:string,
 *     label:string,
 *     description:string,
 *     command:string,
 *     exitCode:int,
 *     output:string,
 *     metrics:array{tests:int|null, assertions:int|null, skipped:int|null, failures:int|null, errors:int|null},
 *     status:string
 * }> $suiteResults
 */
function renderReport(
    string $generatedAt,
    string $phpVersion,
    string $phpunitVersion,
    string $overallStatus,
    int $overallExitCode,
    string $reportPath,
    array $suiteResults
): string {
    $statusColor = match ($overallStatus) {
        'FAILED' => '#dc2626',
        'PASSED WITH SKIPS', 'PASSED WITH EMPTY SUITES' => '#d97706',
        default => '#16a34a',
    };

    $suiteCards = '';

    foreach ($suiteResults as $suite) {
        $metrics = $suite['metrics'];
        $badgeColor = match ($suite['status']) {
            'FAILED' => '#dc2626',
            'SKIPPED', 'EMPTY' => '#d97706',
            default => '#16a34a',
        };

        $suiteCards .= sprintf(
            '<section class="card">
                <div class="card-header">
                    <h2>%s</h2>
                    <span class="badge" style="background:%s">%s</span>
                </div>
                <p class="muted">%s</p>
                <p><strong>Command:</strong> <code>%s</code></p>
                <p><strong>Exit code:</strong> %d</p>
                <ul class="metrics">
                    <li>Tests: %s</li>
                    <li>Assertions: %s</li>
                    <li>Skipped: %s</li>
                    <li>Failures: %s</li>
                    <li>Errors: %s</li>
                </ul>
                <details>
                    <summary>Output</summary>
                    <pre>%s</pre>
                </details>
            </section>',
            htmlspecialchars((string) $suite['label'], ENT_QUOTES),
            $badgeColor,
            htmlspecialchars((string) $suite['status'], ENT_QUOTES),
            htmlspecialchars((string) $suite['description'], ENT_QUOTES),
            htmlspecialchars((string) $suite['command'], ENT_QUOTES),
            (int) $suite['exitCode'],
            htmlspecialchars((string) ($metrics['tests'] ?? '-'), ENT_QUOTES),
            htmlspecialchars((string) ($metrics['assertions'] ?? '-'), ENT_QUOTES),
            htmlspecialchars((string) ($metrics['skipped'] ?? '-'), ENT_QUOTES),
            htmlspecialchars((string) ($metrics['failures'] ?? '-'), ENT_QUOTES),
            htmlspecialchars((string) ($metrics['errors'] ?? '-'), ENT_QUOTES),
            htmlspecialchars((string) $suite['output'], ENT_QUOTES)
        );
    }

    return sprintf(
        '<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lark SDK Test Report</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; margin: 0; padding: 24px; background: #f8fafc; color: #0f172a; }
        .container { max-width: 1100px; margin: 0 auto; }
        .hero { background: #fff; border-radius: 16px; padding: 24px; box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08); margin-bottom: 24px; }
        .status { display: inline-block; padding: 8px 14px; border-radius: 999px; color: #fff; font-weight: 700; background: %s; }
        .meta { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 12px; margin-top: 16px; }
        .meta div, .card { background: #fff; border-radius: 16px; padding: 18px; box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08); }
        .card { margin-top: 18px; }
        .card-header { display: flex; justify-content: space-between; align-items: center; gap: 12px; }
        .badge { color: #fff; padding: 6px 10px; border-radius: 999px; font-size: 12px; font-weight: 700; }
        .muted { color: #475569; }
        .metrics { display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 8px; padding-left: 18px; }
        pre { white-space: pre-wrap; word-break: break-word; background: #0f172a; color: #e2e8f0; padding: 16px; border-radius: 12px; overflow: auto; }
        code { background: #eef2ff; padding: 2px 6px; border-radius: 6px; }
    </style>
</head>
<body>
    <div class="container">
        <section class="hero">
            <h1>Lark SDK Test Report</h1>
            <p><span class="status">%s</span></p>
            <div class="meta">
                <div><strong>Generated At</strong><br>%s</div>
                <div><strong>PHP Version</strong><br>%s</div>
                <div><strong>PHPUnit Version</strong><br>%s</div>
                <div><strong>Exit Code</strong><br>%d</div>
                <div><strong>Report Path</strong><br>%s</div>
            </div>
        </section>
        %s
    </div>
</body>
</html>',
        $statusColor,
        htmlspecialchars($overallStatus, ENT_QUOTES),
        htmlspecialchars($generatedAt, ENT_QUOTES),
        htmlspecialchars($phpVersion, ENT_QUOTES),
        htmlspecialchars($phpunitVersion, ENT_QUOTES),
        $overallExitCode,
        htmlspecialchars($reportPath, ENT_QUOTES),
        $suiteCards
    );
}
