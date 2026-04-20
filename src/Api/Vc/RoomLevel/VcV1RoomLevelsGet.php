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
 * 查询会议室层级列表
 *
 * @see https://feishu.apifox.cn/api-59149714
 */
final class VcV1RoomLevelsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/room_levels';

    protected string $httpMethod = 'GET';
}
