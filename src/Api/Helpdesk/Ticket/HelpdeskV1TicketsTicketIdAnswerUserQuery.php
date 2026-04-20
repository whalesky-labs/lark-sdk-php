<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Ticket;

use Lark\Request\RestRequest;

/**
 * 回复用户提问结果至工单
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1TicketsTicketIdAnswerUserQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/tickets/:ticket_id/answer_user_query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
