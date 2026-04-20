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
