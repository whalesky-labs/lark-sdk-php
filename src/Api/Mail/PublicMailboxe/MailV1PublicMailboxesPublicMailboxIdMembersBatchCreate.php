<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 批量添加公共邮箱成员
 *
 * @see https://feishu.apifox.cn/api-60077994
 */
final class MailV1PublicMailboxesPublicMailboxIdMembersBatchCreate extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes/:public_mailbox_id/members/batch_create';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
