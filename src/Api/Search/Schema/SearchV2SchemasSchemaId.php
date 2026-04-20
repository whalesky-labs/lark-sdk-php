<?php

declare(strict_types=1);

namespace Lark\Api\Search\Schema;

use Lark\Request\RestRequest;

/**
 * 删除数据范式
 *
 * @see https://feishu.apifox.cn/api-60232811
 */
final class SearchV2SchemasSchemaId extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/schemas/:schema_id';

    protected string $httpMethod = 'DELETE';
}
