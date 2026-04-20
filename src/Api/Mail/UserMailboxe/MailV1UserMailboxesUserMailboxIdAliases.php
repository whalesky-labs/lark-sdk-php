<?php

declare(strict_types=1);

namespace Lark\Api\Mail\UserMailboxe;

use Lark\Request\RestRequest;

/**
 * 创建用户邮箱别名
 *
 * @see https://feishu.apifox.cn/api-60084578
 */
final class MailV1UserMailboxesUserMailboxIdAliases extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/user_mailboxes/:user_mailbox_id/aliases';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
