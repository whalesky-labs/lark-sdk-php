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
 * 新增执行者
 *
 * @see https://feishu.apifox.cn/api-9020757
 */
final class TaskV1TasksTaskIdCollaborators extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/collaborators';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
