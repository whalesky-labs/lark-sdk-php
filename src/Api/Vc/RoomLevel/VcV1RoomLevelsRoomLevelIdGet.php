<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

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
