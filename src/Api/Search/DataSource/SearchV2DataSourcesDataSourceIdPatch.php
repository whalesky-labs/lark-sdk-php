<?php

declare(strict_types=1);

namespace Lark\Api\Search\DataSource;

use Lark\Request\RestRequest;

/**
 * 修改数据源
 *
 * @see https://feishu.apifox.cn/api-9020839
 */
final class SearchV2DataSourcesDataSourceIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/data_sources/:data_source_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
