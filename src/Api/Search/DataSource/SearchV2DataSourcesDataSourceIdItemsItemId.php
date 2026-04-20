<?php

declare(strict_types=1);

namespace Lark\Api\Search\DataSource;

use Lark\Request\RestRequest;

/**
 * 获取数据项
 *
 * @see https://feishu.apifox.cn/api-9020835
 */
final class SearchV2DataSourcesDataSourceIdItemsItemId extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/data_sources/:data_source_id/items/:item_id';

    protected string $httpMethod = 'GET';
}
