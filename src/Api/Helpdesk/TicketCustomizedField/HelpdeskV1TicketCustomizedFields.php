<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\TicketCustomizedField;

use Lark\Request\RestRequest;

/**
 * 创建工单自定义字段
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1TicketCustomizedFields extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/ticket_customized_fields';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
