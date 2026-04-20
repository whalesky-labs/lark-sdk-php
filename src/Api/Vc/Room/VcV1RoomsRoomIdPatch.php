<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Room;

use Lark\Request\RestRequest;

/**
 * 更新会议室
 *
 * @see https://feishu.apifox.cn/api-59151404
 */
final class VcV1RoomsRoomIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/rooms/:room_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
