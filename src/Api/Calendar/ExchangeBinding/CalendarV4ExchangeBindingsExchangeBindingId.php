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

namespace Lark\Api\Calendar\ExchangeBinding;

use Lark\Request\RestRequest;

/**
 * 解除 Exchange 账户绑定
 *
 * @see https://feishu.apifox.cn/api-10929020
 */
final class CalendarV4ExchangeBindingsExchangeBindingId extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/exchange_bindings/:exchange_binding_id';

    protected string $httpMethod = 'GET';
}
