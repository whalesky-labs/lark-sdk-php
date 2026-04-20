<?php

declare(strict_types=1);

namespace Lark\Api\Vc\RoomLevel;

use Lark\Request\RestRequest;

/**
 * 批量查询会议室层级详情
 *
 * @see https://feishu.apifox.cn/api-59149247
 */
final class VcV1RoomLevelsMget extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/room_levels/mget';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
