<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 创建邮件组
 *
 * @see https://feishu.apifox.cn/api-9020860
 */
final class MailV1Mailgroups extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
