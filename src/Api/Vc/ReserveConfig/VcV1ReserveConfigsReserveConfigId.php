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

namespace Lark\Api\Vc\ReserveConfig;

use Lark\Request\RestRequest;

/**
 * 更新会议室预定范围
 *
 * @see https://feishu.apifox.cn/api-59161635
 */
final class VcV1ReserveConfigsReserveConfigId extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/reserve_configs/:reserve_config_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
