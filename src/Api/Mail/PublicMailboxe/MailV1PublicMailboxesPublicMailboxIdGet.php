<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 查询指定公共邮箱
 *
 * @see https://feishu.apifox.cn/api-60073852
 */
final class MailV1PublicMailboxesPublicMailboxIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes/:public_mailbox_id';

    protected string $httpMethod = 'GET';
}
