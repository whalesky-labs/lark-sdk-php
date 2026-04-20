<?php

declare(strict_types=1);

namespace Lark\Api\Task\Task;

use Lark\Request\RestRequest;

/**
 * 获取评论详情
 *
 * @see https://feishu.apifox.cn/api-11185553
 */
final class TaskV1TasksTaskIdCommentsCommentIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/task/v1/tasks/:task_id/comments/:comment_id';

    protected string $httpMethod = 'GET';
}
