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
 * 获取妙记统计数据
 *
 * @see https://feishu.apifox.cn/api-60854052
 */
final class MinutesV1MinutesMinuteTokenStatistics extends RestRequest
{
    protected string $apiUri = '/open-apis/minutes/v1/minutes/:minute_token/statistics';

    protected string $httpMethod = 'GET';
}
