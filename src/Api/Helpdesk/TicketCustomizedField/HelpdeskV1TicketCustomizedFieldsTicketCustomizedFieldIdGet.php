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

namespace Lark\Api\Helpdesk\TicketCustomizedField;

use Lark\Request\RestRequest;

/**
 * 获取指定工单自定义字段
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1TicketCustomizedFieldsTicketCustomizedFieldIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/ticket_customized_fields/:ticket_customized_field_id';

    protected string $httpMethod = 'GET';
}
