<?php

declare(strict_types=1);

namespace Lark\Api\Okr\MetricSource;

use Lark\Request\RestRequest;

/**
 * 批量更新指标项
 *
 * @see https://feishu.apifox.cn/api-60832852
 */
final class OkrV1MetricSourcesMetricSourceIdTablesMetricTableIdItemsBatchUpdate extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/metric_sources/:metric_source_id/tables/:metric_table_id/items/batch_update';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
