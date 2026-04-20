<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Meeting;

use Lark\Request\RestRequest;

/**
 * 获取会议详情
 *
 * @see https://feishu.apifox.cn/api-9020883
 */
final class VcV1MeetingsMeetingId extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/meetings/:meeting_id';

    protected string $httpMethod = 'GET';
}
