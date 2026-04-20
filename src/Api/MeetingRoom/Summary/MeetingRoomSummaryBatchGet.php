<?php

declare(strict_types=1);

namespace Lark\Api\MeetingRoom\Summary;

use Lark\Request\RestRequest;

/**
 * 查询会议室日程主题和会议详情
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN
 */
final class MeetingRoomSummaryBatchGet extends RestRequest
{
    protected string $apiUri = '/open-apis/meeting_room/summary/batch_get';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
