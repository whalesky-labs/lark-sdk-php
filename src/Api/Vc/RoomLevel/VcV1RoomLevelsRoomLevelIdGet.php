<?php

declare(strict_types=1);

namespace Lark\Api\Vc\RoomLevel;

use Lark\Request\RestRequest;

/**
 * 查询会议室层级详情
 *
 * @see https://feishu.apifox.cn/api-59149020
 */
final class VcV1RoomLevelsRoomLevelIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/room_levels/:room_level_id';

    protected string $httpMethod = 'GET';
}
