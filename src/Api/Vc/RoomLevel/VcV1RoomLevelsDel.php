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
 * 删除会议室层级
 *
 * @see https://feishu.apifox.cn/api-59148592
 */
final class VcV1RoomLevelsDel extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/room_levels/del';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
