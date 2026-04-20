<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Meeting;

use Lark\Request\RestRequest;

/**
 * 设置主持人
 *
 * @see https://feishu.apifox.cn/api-9020885
 */
final class VcV1MeetingsMeetingIdSetHost extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/meetings/:meeting_id/set_host';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
