<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Notification;

use Lark\Request\RestRequest;

/**
 * 查询推送
 *
 * @see https://feishu.apifox.cn/api-11128074
 */
final class HelpdeskV1NotificationsNotificationIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/notifications/:notification_id';

    protected string $httpMethod = 'GET';
}
