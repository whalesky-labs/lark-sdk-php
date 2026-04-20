<?php

declare(strict_types=1);

namespace Lark\Api\Mail\UserMailboxe;

use Lark\Request\RestRequest;

/**
 * 从回收站删除用户邮箱地址
 *
 * @see https://feishu.apifox.cn/api-60084392
 */
final class MailV1UserMailboxesUserMailboxId extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/user_mailboxes/:user_mailbox_id';

    protected string $httpMethod = 'DELETE';
}
