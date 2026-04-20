<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Meeting;

use Lark\Request\RestRequest;

/**
 * 移除参会人
 *
 * @see https://feishu.apifox.cn/api-10941451
 */
final class VcV1MeetingsMeetingIdKickout extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/meetings/:meeting_id/kickout';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
