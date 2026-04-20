<?php

declare(strict_types=1);

namespace Lark\Api\Mail\PublicMailboxe;

use Lark\Request\RestRequest;

/**
 * 删除公共邮箱
 *
 * @see https://feishu.apifox.cn/api-11230782
 */
final class MailV1PublicMailboxesPublicMailboxId extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/public_mailboxes/:public_mailbox_id';

    protected string $httpMethod = 'DELETE';
}
