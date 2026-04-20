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
