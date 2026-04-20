<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Instance;

use Lark\Request\RestRequest;

/**
 * 删除评论
 *
 * @see https://feishu.apifox.cn/api-59921799
 */
final class ApprovalV4InstancesInstanceIdCommentsCommentId extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/:instance_id/comments/:comment_id';

    protected string $httpMethod = 'DELETE';
}
