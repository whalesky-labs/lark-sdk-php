<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Export;

use Lark\Request\RestRequest;

/**
 * 导出会议室预定数据
 *
 * @see https://feishu.apifox.cn/api-59147437
 */
final class VcV1ExportsResourceReservationList extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/exports/resource_reservation_list';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
