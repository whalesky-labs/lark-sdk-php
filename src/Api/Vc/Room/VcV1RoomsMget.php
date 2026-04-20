<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Room;

use Lark\Request\RestRequest;

/**
 * 批量查询会议室详情
 *
 * @see https://feishu.apifox.cn/api-59151742
 */
final class VcV1RoomsMget extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/rooms/mget';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
