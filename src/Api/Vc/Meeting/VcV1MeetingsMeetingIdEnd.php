<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Meeting;

use Lark\Request\RestRequest;

/**
 * 结束会议
 *
 * @see https://feishu.apifox.cn/api-9020886
 */
final class VcV1MeetingsMeetingIdEnd extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/meetings/:meeting_id/end';

    protected string $httpMethod = 'PATCH';
}
