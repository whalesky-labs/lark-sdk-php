<?php

declare(strict_types=1);

namespace Lark\Api\Pay\Order;

use Lark\Request\RestRequest;

/**
 * 查询订单详情
 *
 * @see https://feishu.apifox.cn/api-11243905
 */
final class PayV1OrderGet extends RestRequest
{
    protected string $apiUri = '/open-apis/pay/v1/order/get';

    protected string $httpMethod = 'GET';
}
