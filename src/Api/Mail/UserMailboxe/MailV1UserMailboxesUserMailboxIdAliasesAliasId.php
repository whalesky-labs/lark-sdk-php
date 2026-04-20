<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

namespace Lark\Api\Mail\UserMailboxe;

use Lark\Request\RestRequest;

/**
 * 删除用户邮箱别名
 *
 * @see https://feishu.apifox.cn/api-60084880
 */
final class MailV1UserMailboxesUserMailboxIdAliasesAliasId extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/user_mailboxes/:user_mailbox_id/aliases/:alias_id';

    protected string $httpMethod = 'DELETE';
}
