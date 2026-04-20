<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Reserve;

use Lark\Request\RestRequest;

/**
 * 删除预约
 *
 * @see https://feishu.apifox.cn/api-9020889
 */
final class VcV1ReservesReserveId extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/reserves/:reserve_id';

    protected string $httpMethod = 'DELETE';
}
