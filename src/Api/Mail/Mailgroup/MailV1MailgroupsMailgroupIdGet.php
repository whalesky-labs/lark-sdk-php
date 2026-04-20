<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 查询指定邮件组
 *
 * @see https://feishu.apifox.cn/api-60055016
 */
final class MailV1MailgroupsMailgroupIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id';

    protected string $httpMethod = 'GET';
}
