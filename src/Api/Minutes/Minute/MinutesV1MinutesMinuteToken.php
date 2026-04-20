<?php

declare(strict_types=1);

namespace Lark\Api\Minutes\Minute;

use Lark\Request\RestRequest;

/**
 * 获取妙记信息
 *
 * @see https://feishu.apifox.cn/api-60854480
 */
final class MinutesV1MinutesMinuteToken extends RestRequest
{
    protected string $apiUri = '/open-apis/minutes/v1/minutes/:minute_token';

    protected string $httpMethod = 'GET';
}
