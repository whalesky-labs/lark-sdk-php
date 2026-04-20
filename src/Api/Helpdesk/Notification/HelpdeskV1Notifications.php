<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Notification;

use Lark\Request\RestRequest;

/**
 * 创建推送
 *
 * @see https://feishu.apifox.cn/api-11126324
 */
final class HelpdeskV1Notifications extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/notifications';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
