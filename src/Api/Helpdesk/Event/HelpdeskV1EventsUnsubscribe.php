<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Event;

use Lark\Request\RestRequest;

/**
 * 取消订阅服务台事件
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1EventsUnsubscribe extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/events/unsubscribe';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
