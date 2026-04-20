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

namespace Lark\Api\Admin\Badge;

use Lark\Request\RestRequest;

/**
 * 创建勋章
 *
 * @see https://feishu.apifox.cn/api-60284612
 */
final class AdminV1Badges extends RestRequest
{
    protected string $apiUri = '/open-apis/admin/v1/badges';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
