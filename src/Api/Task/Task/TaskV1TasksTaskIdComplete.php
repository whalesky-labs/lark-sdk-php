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

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 完成任务
 *
 * @see https://feishu.apifox.cn/api-9020768
 */
final class TaskV1TasksTaskIdComplete extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/complete';

    protected string $httpMethod = 'POST';
}
