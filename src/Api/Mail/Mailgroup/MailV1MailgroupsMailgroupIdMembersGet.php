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

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 获取所有邮件组成员
 *
 * @see https://feishu.apifox.cn/api-60058169
 */
final class MailV1MailgroupsMailgroupIdMembersGet extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id/members';

    protected string $httpMethod = 'GET';
}
