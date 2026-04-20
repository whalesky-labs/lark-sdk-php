<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Ticket;

use Lark\Request\RestRequest;

/**
 * 查询全部工单详情
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1Tickets extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/tickets';

    protected string $httpMethod = 'GET';
}
