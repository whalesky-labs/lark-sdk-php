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
