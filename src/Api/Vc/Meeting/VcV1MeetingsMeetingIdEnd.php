<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

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
