<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 查询所有公共邮箱成员信息
 *
 * @see https://feishu.apifox.cn/api-9020844
 */
final class MailV1PublicMailboxesPublicMailboxIdMembersGet extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes/:public_mailbox_id/members';

    protected string $httpMethod = 'GET';
}
