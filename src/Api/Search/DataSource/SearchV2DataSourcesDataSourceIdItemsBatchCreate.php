<?php

declare(strict_types=1);

namespace Lark\Api\Search\DataSource;

use Lark\Request\RestRequest;

/**
 * 批量为数据项创建索引
 *
 * @see https://feishu.apifox.cn/api-60224137
 */
final class SearchV2DataSourcesDataSourceIdItemsBatchCreate extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/data_sources/:data_source_id/items/batch_create';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
