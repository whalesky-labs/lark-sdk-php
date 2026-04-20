<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

namespace Lark\Api\Search\DataSource;

use Lark\Request\RestRequest;

/**
 * 删除数据源
 *
 * @see https://feishu.apifox.cn/api-9020841
 */
final class SearchV2DataSourcesDataSourceId extends RestRequest
{
    protected string $apiUri = '/open-apis/search/v2/data_sources/:data_source_id';

    protected string $httpMethod = 'DELETE';
}
