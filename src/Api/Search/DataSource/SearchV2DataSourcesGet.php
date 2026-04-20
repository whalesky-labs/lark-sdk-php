<?php

declare(strict_types=1);

namespace Lark\Api\Search\DataSource;

use Lark\Request\RestRequest;

/**
 * 批量获取所有的数据源
 *
 * @see https://feishu.apifox.cn/api-9020840
 */
final class SearchV2DataSourcesGet extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/data_sources';

    protected string $httpMethod = 'GET';
}
