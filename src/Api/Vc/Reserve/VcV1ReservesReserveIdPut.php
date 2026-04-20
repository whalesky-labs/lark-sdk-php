<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Reserve;

use Lark\Request\RestRequest;

/**
 * 更新预约
 *
 * @see https://feishu.apifox.cn/api-9020888
 */
final class VcV1ReservesReserveIdPut extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/reserves/:reserve_id';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
