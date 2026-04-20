<?php

declare(strict_types=1);

namespace Lark\Api\Search\DataSource;

use Lark\Request\RestRequest;

/**
 * 删除数据项
 *
 * @see https://feishu.apifox.cn/api-9020836
 */
final class SearchV2DataSourcesDataSourceIdItemsItemIdDelete extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/data_sources/:data_source_id/items/:item_id';

    protected string $httpMethod = 'DELETE';
}
