<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Ticket;

use Lark\Request\RestRequest;

/**
 * 获取工单消息详情
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1TicketsTicketIdMessagesGet extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/tickets/:ticket_id/messages';

    protected string $httpMethod = 'GET';
}
