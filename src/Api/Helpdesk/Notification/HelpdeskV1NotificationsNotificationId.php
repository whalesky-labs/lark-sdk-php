<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Notification;

use Lark\Request\RestRequest;

/**
 * 更新推送
 *
 * @see https://feishu.apifox.cn/api-11127403
 */
final class HelpdeskV1NotificationsNotificationId extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/notifications/:notification_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
