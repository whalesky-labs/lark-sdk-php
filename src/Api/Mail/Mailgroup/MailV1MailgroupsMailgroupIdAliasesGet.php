<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 获取邮件组所有别名
 *
 * @see https://feishu.apifox.cn/api-60063056
 */
final class MailV1MailgroupsMailgroupIdAliasesGet extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id/aliases';

    protected string $httpMethod = 'GET';
}
