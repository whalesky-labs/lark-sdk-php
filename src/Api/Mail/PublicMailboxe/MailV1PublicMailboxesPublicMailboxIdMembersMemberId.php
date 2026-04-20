<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 删除公共邮箱成员
 *
 * @see https://feishu.apifox.cn/api-9020845
 */
final class MailV1PublicMailboxesPublicMailboxIdMembersMemberId extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes/:public_mailbox_id/members/:member_id';

    protected string $httpMethod = 'DELETE';
}
