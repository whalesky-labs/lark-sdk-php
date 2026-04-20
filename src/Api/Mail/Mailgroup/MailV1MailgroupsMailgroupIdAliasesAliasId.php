<?php

declare(strict_types=1);

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
