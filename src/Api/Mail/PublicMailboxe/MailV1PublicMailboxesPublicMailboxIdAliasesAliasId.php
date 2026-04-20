<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 删除公共邮箱别名
 *
 * @see https://feishu.apifox.cn/api-60084022
 */
final class MailV1PublicMailboxesPublicMailboxIdAliasesAliasId extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes/:public_mailbox_id/aliases/:alias_id';

    protected string $httpMethod = 'DELETE';
}
