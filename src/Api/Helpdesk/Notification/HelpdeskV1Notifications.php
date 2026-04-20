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
