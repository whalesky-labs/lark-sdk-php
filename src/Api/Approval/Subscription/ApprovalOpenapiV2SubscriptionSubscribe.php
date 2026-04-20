<?php

declare(strict_types=1);

namespace Lark\Api\Approval\Subscription;

use Lark\Request\RestRequest;

/**
 * 订阅审批事件
 *
 * @see https://feishu.apifox.cn/api-9020747
 */
final class ApprovalOpenapiV2SubscriptionSubscribe extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/openapi/v2/subscription/subscribe';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
