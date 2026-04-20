<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\TicketImage;

use Lark\Request\RestRequest;

/**
 * 获取服务台工单内消息图像
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1TicketImages extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/ticket_images';

    protected string $httpMethod = 'GET';
}
