<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 批量删除公共邮箱成员
 *
 * @see https://feishu.apifox.cn/api-60078124
 */
final class MailV1PublicMailboxesPublicMailboxIdMembersBatchDelete extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes/:public_mailbox_id/members/batch_delete';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
