<?php

declare(strict_types=1);

namespace Lark\Api\Auth\AppTicket;

use Lark\Request\RestRequest;

/**
 * 重新获取 app_ticket
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN
 */
final class AuthV3AppTicketResend extends RestRequest
{
    protected string $apiUri = '/open-apis/auth/v3/app_ticket/resend';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
