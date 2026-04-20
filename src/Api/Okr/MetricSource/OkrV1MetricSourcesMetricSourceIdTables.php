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

namespace Lark\Api\Okr\MetricSource;

use Lark\Request\RestRequest;

/**
 * 获取指标表
 *
 * @see https://feishu.apifox.cn/api-60828689
 */
final class OkrV1MetricSourcesMetricSourceIdTables extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/metric_sources/:metric_source_id/tables';

    protected string $httpMethod = 'GET';
}
