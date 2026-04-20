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

namespace Lark\Api\Approval\Instance;

use Lark\Request\RestRequest;

/**
 * 获取评论
 *
 * @see https://feishu.apifox.cn/api-59929041
 */
final class ApprovalV4InstancesInstanceIdCommentsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/:instance_id/comments';

    protected string $httpMethod = 'GET';
}
