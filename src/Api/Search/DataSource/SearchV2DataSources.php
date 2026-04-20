<?php

declare(strict_types=1);

namespace Lark\Api\Search\DataSource;

use Lark\Request\RestRequest;

/**
 * 创建数据源
 *
 * @see https://feishu.apifox.cn/api-9020837
 */
final class SearchV2DataSources extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/data_sources';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
