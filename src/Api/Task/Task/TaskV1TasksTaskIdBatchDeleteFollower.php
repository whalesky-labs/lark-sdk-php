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
 * 批量删除关注人
 *
 * @see https://feishu.apifox.cn/api-60039025
 */
final class TaskV1TasksTaskIdBatchDeleteFollower extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/batch_delete_follower';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
