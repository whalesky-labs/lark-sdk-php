<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Meeting;

use Lark\Request\RestRequest;

/**
 * 开始录制
 *
 * @see https://feishu.apifox.cn/api-9020879
 */
final class VcV1MeetingsMeetingIdRecordingStart extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/meetings/:meeting_id/recording/start';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
