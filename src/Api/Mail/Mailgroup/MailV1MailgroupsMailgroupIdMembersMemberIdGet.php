<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 查询指定邮件组成员
 *
 * @see https://feishu.apifox.cn/api-60057459
 */
final class MailV1MailgroupsMailgroupIdMembersMemberIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id/members/:member_id';

    protected string $httpMethod = 'GET';
}
