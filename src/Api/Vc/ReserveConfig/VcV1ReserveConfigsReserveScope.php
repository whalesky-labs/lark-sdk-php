<?php

declare(strict_types=1);

namespace Lark\Api\Vc\ReserveConfig;

use Lark\Request\RestRequest;

/**
 * 获取会议室预定范围
 *
 * @see https://feishu.apifox.cn/api-59161263
 */
final class VcV1ReserveConfigsReserveScope extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/reserve_configs/reserve_scope';

    protected string $httpMethod = 'GET';
}
