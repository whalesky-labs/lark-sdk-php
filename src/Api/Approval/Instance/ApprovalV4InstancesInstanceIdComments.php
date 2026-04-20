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
 * 创建评论
 *
 * @see https://feishu.apifox.cn/api-59921003
 */
final class ApprovalV4InstancesInstanceIdComments extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/:instance_id/comments';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
