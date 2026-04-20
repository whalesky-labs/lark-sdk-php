<?php

declare(strict_types=1);

namespace Lark\Api\Calendar\ExchangeBinding;

use Lark\Request\RestRequest;

/**
 * 将 Exchange 账户绑定到飞书账户
 *
 * @see https://feishu.apifox.cn/api-10928757
 */
final class CalendarV4ExchangeBindings extends RestRequest
{
    protected string $apiUri = '/open-apis/calendar/v4/exchange_bindings';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
