<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Message;

use Lark\Request\RestRequest;

/**
 * 更新审批 Bot 消息
 *
 * @see https://feishu.apifox.cn/api-11123131
 */
final class ApprovalOpenapiV1MessageUpdate extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/openapi/v1/message/update';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
