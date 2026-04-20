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
 * 创建会议室层级
 *
 * @see https://feishu.apifox.cn/api-59147948
 */
final class VcV1RoomLevels extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/room_levels';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
