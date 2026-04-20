<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Room;

use Lark\Request\RestRequest;

/**
 * 查询会议室详情
 *
 * @see https://feishu.apifox.cn/api-59151576
 */
final class VcV1RoomsRoomIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/rooms/:room_id';

    protected string $httpMethod = 'GET';
}
