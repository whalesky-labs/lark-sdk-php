<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\TicketCustomizedField;

use Lark\Request\RestRequest;

/**
 * 删除工单自定义字段
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1TicketCustomizedFieldsTicketCustomizedFieldId extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/ticket_customized_fields/:ticket_customized_field_id';

    protected string $httpMethod = 'DELETE';
}
