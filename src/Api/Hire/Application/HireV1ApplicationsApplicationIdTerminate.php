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

namespace Lark\Api\Hire\Application;

use Lark\Request\RestRequest;

/**
 * 终止投递
 *
 * @see https://feishu.apifox.cn/api-11283396
 */
final class HireV1ApplicationsApplicationIdTerminate extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/applications/:application_id/terminate';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
