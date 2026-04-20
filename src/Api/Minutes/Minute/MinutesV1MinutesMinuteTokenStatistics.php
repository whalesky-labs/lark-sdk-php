<?php

declare(strict_types=1);

namespace Lark\Api\Minutes\Minute;

use Lark\Request\RestRequest;

/**
 * 获取妙记统计数据
 *
 * @see https://feishu.apifox.cn/api-60854052
 */
final class MinutesV1MinutesMinuteTokenStatistics extends RestRequest
{
    protected string $apiUri = '/open-apis/minutes/v1/minutes/:minute_token/statistics';

    protected string $httpMethod = 'GET';
}
