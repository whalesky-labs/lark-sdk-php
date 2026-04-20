<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Instance;

use Lark\Request\RestRequest;

/**
 * 创建评论
 *
 * @see https://feishu.apifox.cn/api-59921003
 */
final class ApprovalV4InstancesInstanceIdComments extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/instances/:instance_id/comments';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
