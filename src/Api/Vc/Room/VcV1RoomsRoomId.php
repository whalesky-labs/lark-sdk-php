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
 * 删除会议室
 *
 * @see https://feishu.apifox.cn/api-59151297
 */
final class VcV1RoomsRoomId extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/rooms/:room_id';

    protected string $httpMethod = 'DELETE';
}
