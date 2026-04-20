<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Room;

use Lark\Request\RestRequest;

/**
 * 搜索会议室
 *
 * @see https://feishu.apifox.cn/api-59153670
 */
final class VcV1RoomsSearch extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/rooms/search';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
