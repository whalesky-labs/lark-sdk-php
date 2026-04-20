<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 删除公共邮箱所有成员
 *
 * @see https://feishu.apifox.cn/api-60075601
 */
final class MailV1PublicMailboxesPublicMailboxIdMembersClear extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes/:public_mailbox_id/members/clear';

    protected string $httpMethod = 'POST';
}
