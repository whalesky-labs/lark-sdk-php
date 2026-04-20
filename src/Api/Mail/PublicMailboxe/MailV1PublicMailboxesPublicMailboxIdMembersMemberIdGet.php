<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 获取公共邮箱成员信息
 *
 * @see https://feishu.apifox.cn/api-9020843
 */
final class MailV1PublicMailboxesPublicMailboxIdMembersMemberIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes/:public_mailbox_id/members/:member_id';

    protected string $httpMethod = 'GET';
}
