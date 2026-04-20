<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 创建公共邮箱
 *
 * @see https://feishu.apifox.cn/api-9020847
 */
final class MailV1PublicMailboxes extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
