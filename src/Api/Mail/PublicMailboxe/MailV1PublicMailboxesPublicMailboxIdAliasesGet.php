<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 查询公共邮箱的所有别名
 *
 * @see https://feishu.apifox.cn/api-60084131
 */
final class MailV1PublicMailboxesPublicMailboxIdAliasesGet extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes/:public_mailbox_id/aliases';

    protected string $httpMethod = 'GET';
}
