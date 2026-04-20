<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Room;

use Lark\Request\RestRequest;

/**
 * 删除会议室
 *
 * @see https://feishu.apifox.cn/api-59151297
 */
final class VcV1RoomsRoomId extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/rooms/:room_id';

    protected string $httpMethod = 'DELETE';
}
