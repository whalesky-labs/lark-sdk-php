<?php

declare(strict_types=1);

use Lark\Core\Config;
use Lark\LarkClient;
use GuzzleHttp\Client as GuzzleClient;
use Nyholm\Psr7\Factory\Psr17Factory;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../tests/bootstrap.php';

/**
 * Install one PSR-18 client and one PSR-17 factory implementation before running:
 *
 * composer require guzzlehttp/guzzle nyholm/psr7
 */

$factory = new Psr17Factory();
$psr18Client = new GuzzleClient();
$appId = getenv('LARK_TEST_APP_ID') ?: '';
$appSecret = getenv('LARK_TEST_APP_SECRET') ?: '';

if ($appId === '' || $appSecret === '') {
    fwrite(STDERR, "Missing LARK_TEST_APP_ID or LARK_TEST_APP_SECRET in .env" . PHP_EOL);
    exit(1);
}

$client = new LarkClient(
    new Config(
        appId: $appId,
        appSecret: $appSecret,
        baseUri: getenv('LARK_TEST_BASE_URI') ?: 'https://open.feishu.cn',
        userAgent: getenv('LARK_TEST_USER_AGENT') ?: 'lark-sdk-php/example'
    ),
    $psr18Client,
    $factory,
    $factory
);

$result = $client->auth()->tenantAccessToken()->create();

var_dump($result);
