<?php

declare(strict_types=1);

namespace Lark\Api\Search\Schema;

use Lark\Request\RestRequest;

/**
 * 修改数据范式
 *
 * @see https://feishu.apifox.cn/api-60234297
 */
final class SearchV2SchemasSchemaIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/schemas/:schema_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
