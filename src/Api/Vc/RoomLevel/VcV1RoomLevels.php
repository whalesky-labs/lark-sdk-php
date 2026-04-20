<?php

declare(strict_types=1);

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
