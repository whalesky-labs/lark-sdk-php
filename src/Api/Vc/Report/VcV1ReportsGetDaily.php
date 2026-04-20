<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Report;

use Lark\Request\RestRequest;

/**
 * 获取会议报告
 *
 * @see https://feishu.apifox.cn/api-9020877
 */
final class VcV1ReportsGetDaily extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/reports/get_daily';

    protected string $httpMethod = 'GET';
}
