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

namespace Lark\Api\Pay\Order;

use Lark\Request\RestRequest;

/**
 * 查询租户购买的付费方案
 *
 * @see https://feishu.apifox.cn/api-9020867
 */
final class PayV1OrderList extends RestRequest
{
    protected string $apiUri = '/open-apis/pay/v1/order/list';

    protected string $httpMethod = 'GET';
}
