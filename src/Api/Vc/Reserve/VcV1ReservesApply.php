<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Reserve;

use Lark\Request\RestRequest;

/**
 * 预约会议
 *
 * @see https://feishu.apifox.cn/api-9020887
 */
final class VcV1ReservesApply extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/reserves/apply';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
