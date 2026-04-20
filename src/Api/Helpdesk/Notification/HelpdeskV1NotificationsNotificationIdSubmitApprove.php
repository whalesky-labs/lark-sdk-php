<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Notification;

use Lark\Request\RestRequest;

/**
 * 提交审核
 *
 * @see https://feishu.apifox.cn/api-11129401
 */
final class HelpdeskV1NotificationsNotificationIdSubmitApprove extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/notifications/:notification_id/submit_approve';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
