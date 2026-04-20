<?php

declare(strict_types=1);

namespace Lark\Api\Search\DataSource;

use Lark\Request\RestRequest;

/**
 * 为指定数据项创建索引
 *
 * @see https://feishu.apifox.cn/api-9020834
 */
final class SearchV2DataSourcesDataSourceIdItems extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/data_sources/:data_source_id/items';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
