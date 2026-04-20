<?php

declare(strict_types=1);

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
