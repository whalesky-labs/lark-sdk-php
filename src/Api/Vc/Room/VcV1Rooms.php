<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Room;

use Lark\Request\RestRequest;

/**
 * 创建会议室
 *
 * @see https://feishu.apifox.cn/api-59151161
 */
final class VcV1Rooms extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/rooms';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
