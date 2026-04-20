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
 * 删除评论
 *
 * @see https://feishu.apifox.cn/api-11185483
 */
final class TaskV1TasksTaskIdCommentsCommentId extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/comments/:comment_id';

    protected string $httpMethod = 'DELETE';
}
