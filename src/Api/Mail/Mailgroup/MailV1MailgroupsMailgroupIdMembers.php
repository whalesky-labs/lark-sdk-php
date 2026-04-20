<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 创建邮件组成员
 *
 * @see https://feishu.apifox.cn/api-9020856
 */
final class MailV1MailgroupsMailgroupIdMembers extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id/members';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
