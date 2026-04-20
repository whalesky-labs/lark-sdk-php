<?php

declare(strict_types=1);

namespace Lark\Api\Approval\ExternalTask;

use Lark\Request\RestRequest;

/**
 * 获取三方审批任务状态
 *
 * @see https://feishu.apifox.cn/api-59942722
 */
final class ApprovalV4ExternalTasks extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/v4/external_tasks';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
