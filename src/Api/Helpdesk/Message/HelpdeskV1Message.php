<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Message;

use Lark\Request\RestRequest;

/**
 * 服务台机器人向工单绑定的群内发送消息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1Message extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/message';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
