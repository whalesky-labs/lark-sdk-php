<?php

declare(strict_types=1);

namespace Lark\Api\Search\DataSource;

use Lark\Request\RestRequest;

/**
 * 获取数据源
 *
 * @see https://feishu.apifox.cn/api-9020838
 */
final class SearchV2DataSourcesDataSourceIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/data_sources/:data_source_id';

    protected string $httpMethod = 'GET';
}
