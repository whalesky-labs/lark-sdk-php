<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Notification;

use Lark\Request\RestRequest;

/**
 * 执行推送
 *
 * @see https://feishu.apifox.cn/api-11130094
 */
final class HelpdeskV1NotificationsNotificationIdExecuteSend extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/notifications/:notification_id/execute_send';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
