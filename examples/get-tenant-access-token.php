<?php

declare(strict_types=1);

use Lark\Core\Config;
use Lark\LarkClient;
use GuzzleHttp\Client as GuzzleClient;
use Nyholm\Psr7\Factory\Psr17Factory;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Install one PSR-18 client and one PSR-17 factory implementation before running:
 *
 * composer require guzzlehttp/guzzle nyholm/psr7
 */

$factory = new Psr17Factory();
$psr18Client = new GuzzleClient();

$client = new LarkClient(
    new Config(
        appId: 'your_app_id',
        appSecret: 'your_app_secret'
    ),
    $psr18Client,
    $factory,
    $factory
);

$result = $client->auth()->tenantAccessToken()->create();

var_dump($result);
