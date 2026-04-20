<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

namespace Lark\Api\Helpdesk\Notification;

use Lark\Request\RestRequest;

/**
 * 预览推送
 *
 * @see https://feishu.apifox.cn/api-11128891
 */
final class HelpdeskV1NotificationsNotificationIdPreview extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/notifications/:notification_id/preview';

    protected string $httpMethod = 'POST';
}
