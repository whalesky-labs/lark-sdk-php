<?php

declare(strict_types=1);

namespace Lark\Api\MeetingRoom\Freebusy;

use Lark\Request\RestRequest;

/**
 * 查询会议室忙闲
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN
 */
final class MeetingRoomFreebusyBatchGet extends RestRequest
{
    protected string $apiUri = '/open-apis/meeting_room/freebusy/batch_get';

    protected string $httpMethod = 'GET';
}
