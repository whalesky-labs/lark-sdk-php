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

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 复制仪表盘
 *
 * @see https://feishu.apifox.cn/api-58954090
 */
final class BitableV1AppsAppTokenDashboardsBlockIdCopy extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/dashboards/:block_id/copy';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
