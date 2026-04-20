<?php

declare(strict_types=1);

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
