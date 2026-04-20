<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Instance;

use Lark\Request\RestRequest;

/**
 * 清空评论
 *
 * @see https://feishu.apifox.cn/api-59923490
 */
final class ApprovalV4InstancesInstanceIdCommentsRemove extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/:instance_id/comments/remove';

    protected string $httpMethod = 'POST';
}
