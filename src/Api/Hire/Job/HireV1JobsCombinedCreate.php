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

namespace Lark\Api\Hire\Job;

use Lark\Request\RestRequest;

/**
 * 新建职位
 *
 * @see https://feishu.apifox.cn/api-60292816
 */
final class HireV1JobsCombinedCreate extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/jobs/combined_create';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
