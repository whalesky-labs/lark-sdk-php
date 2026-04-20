<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 删除邮件组
 *
 * @see https://feishu.apifox.cn/api-9020865
 */
final class MailV1MailgroupsMailgroupId extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id';

    protected string $httpMethod = 'DELETE';
}
