<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Ticket;

use Lark\Request\RestRequest;

/**
 * 查询指定工单详情
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1TicketsTicketIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/tickets/:ticket_id';

    protected string $httpMethod = 'GET';
}
