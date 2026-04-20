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
 * 获取单个审批实例详情
 *
 * @see https://feishu.apifox.cn/api-9020734
 */
final class ApprovalV4InstancesInstanceId extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/:instance_id';

    protected string $httpMethod = 'POST';
}
