<?php

declare(strict_types=1);

namespace Lark\Api\Vc\RoomLevel;

use Lark\Request\RestRequest;

/**
 * 查询会议室层级列表
 *
 * @see https://feishu.apifox.cn/api-59149714
 */
final class VcV1RoomLevelsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/room_levels';

    protected string $httpMethod = 'GET';
}
