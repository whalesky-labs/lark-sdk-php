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
 * 删除邮件组别名
 *
 * @see https://feishu.apifox.cn/api-60062875
 */
final class MailV1MailgroupsMailgroupIdAliasesAliasId extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id/aliases/:alias_id';

    protected string $httpMethod = 'DELETE';
}
