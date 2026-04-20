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

namespace Lark\Api\Approval\Task;

use Lark\Request\RestRequest;

/**
 * 查询用户的任务列表
 *
 * @see https://feishu.apifox.cn/api-59949572
 */
final class ApprovalV4TasksQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/tasks/query';

    protected string $httpMethod = 'GET';
}
