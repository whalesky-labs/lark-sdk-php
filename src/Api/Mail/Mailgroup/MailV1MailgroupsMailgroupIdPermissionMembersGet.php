<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 批量获取邮件组权限成员
 *
 * @see https://feishu.apifox.cn/api-9020854
 */
final class MailV1MailgroupsMailgroupIdPermissionMembersGet extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id/permission_members';

    protected string $httpMethod = 'GET';
}
