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
