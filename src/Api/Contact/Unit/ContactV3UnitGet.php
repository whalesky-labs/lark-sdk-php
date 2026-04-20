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

namespace Lark\Api\Contact\Unit;

use Lark\Request\RestRequest;

/**
 * 获取单位列表
 *
 * @see https://feishu.apifox.cn/api-9247794
 */
final class ContactV3UnitGet extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/unit';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
