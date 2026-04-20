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
 * 邀请参会人
 *
 * @see https://feishu.apifox.cn/api-9020884
 */
final class VcV1MeetingsMeetingIdInvite extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/meetings/:meeting_id/invite';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
