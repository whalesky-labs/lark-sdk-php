<?php

declare(strict_types=1);

namespace Lark\Api\Okr\MetricSource;

use Lark\Request\RestRequest;

/**
 * 获取指标库
 *
 * @see https://feishu.apifox.cn/api-60828392
 */
final class OkrV1MetricSources extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/metric_sources';

    protected string $httpMethod = 'GET';
}
