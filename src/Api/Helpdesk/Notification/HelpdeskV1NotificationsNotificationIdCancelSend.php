<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Notification;

use Lark\Request\RestRequest;

/**
 * 取消推送
 *
 * @see https://feishu.apifox.cn/api-11130553
 */
final class HelpdeskV1NotificationsNotificationIdCancelSend extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/notifications/:notification_id/cancel_send';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
