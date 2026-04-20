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
 * 批量查询会议室层级详情
 *
 * @see https://feishu.apifox.cn/api-59149247
 */
final class VcV1RoomLevelsMget extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/room_levels/mget';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
