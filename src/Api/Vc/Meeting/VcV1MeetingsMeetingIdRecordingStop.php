<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Meeting;

use Lark\Request\RestRequest;

/**
 * 停止录制
 *
 * @see https://feishu.apifox.cn/api-9020880
 */
final class VcV1MeetingsMeetingIdRecordingStop extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/meetings/:meeting_id/recording/stop';

    protected string $httpMethod = 'PATCH';
}
