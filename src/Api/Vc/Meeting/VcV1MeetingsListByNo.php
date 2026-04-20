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
 * 获取与会议号相关联的会议列表
 *
 * @see https://feishu.apifox.cn/api-10939723
 */
final class VcV1MeetingsListByNo extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/meetings/list_by_no';

    protected string $httpMethod = 'GET';
}
