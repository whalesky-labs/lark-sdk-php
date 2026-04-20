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

namespace Lark\Api\Event\OutboundIp;

use Lark\Request\RestRequest;

/**
 * 获取事件出口 IP
 *
 * @see https://feishu.apifox.cn/api-362523913
 */
final class EventV1OutboundIp extends RestRequest
{
    protected string $apiUri = '/open-apis/event/v1/outbound_ip';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
