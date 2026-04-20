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

namespace Lark\Api\Search\Schema;

use Lark\Request\RestRequest;

/**
 * 创建数据范式
 *
 * @see https://feishu.apifox.cn/api-60232727
 */
final class SearchV2Schemas extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/schemas';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
