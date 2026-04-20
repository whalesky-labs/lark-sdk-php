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
 * 删除指定执行者
 *
 * @see https://feishu.apifox.cn/api-9020758
 */
final class TaskV1TasksTaskIdCollaboratorsCollaboratorId extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/collaborators/:collaborator_id';

    protected string $httpMethod = 'DELETE';
}
