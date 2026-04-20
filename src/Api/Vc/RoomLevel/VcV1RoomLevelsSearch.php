<?php

declare(strict_types=1);

namespace Lark\Api\Vc\RoomLevel;

use Lark\Request\RestRequest;

/**
 * 搜索会议室层级
 *
 * @see https://feishu.apifox.cn/api-59150135
 */
final class VcV1RoomLevelsSearch extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/room_levels/search';

    protected string $httpMethod = 'GET';
}
