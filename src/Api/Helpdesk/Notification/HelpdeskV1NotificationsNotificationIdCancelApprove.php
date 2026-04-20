<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Notification;

use Lark\Request\RestRequest;

/**
 * 取消审核
 *
 * @see https://feishu.apifox.cn/api-11129473
 */
final class HelpdeskV1NotificationsNotificationIdCancelApprove extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/notifications/:notification_id/cancel_approve';

    protected string $httpMethod = 'POST';
}
