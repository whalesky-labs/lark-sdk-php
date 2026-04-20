<?php

declare(strict_types=1);

namespace Lark\Api\Vc\RoomLevel;

use Lark\Request\RestRequest;

/**
 * 更新会议室层级
 *
 * @see https://feishu.apifox.cn/api-59148932
 */
final class VcV1RoomLevelsRoomLevelId extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/room_levels/:room_level_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
