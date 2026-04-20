<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 查询所有公共邮箱
 *
 * @see https://feishu.apifox.cn/api-9020849
 */
final class MailV1PublicMailboxesGet extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes';

    protected string $httpMethod = 'GET';
}
