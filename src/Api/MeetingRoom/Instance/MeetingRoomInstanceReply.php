<?php

declare(strict_types=1);

namespace Lark\Api\MeetingRoom\Instance;

use Lark\Request\RestRequest;

/**
 * 回复会议室日程实例
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN
 */
final class MeetingRoomInstanceReply extends RestRequest
{
    protected string $apiUri = '/open-apis/meeting_room/instance/reply';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
