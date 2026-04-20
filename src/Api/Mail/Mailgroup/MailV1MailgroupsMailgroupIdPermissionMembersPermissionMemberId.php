<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 删除邮件组权限成员
 *
 * @see https://feishu.apifox.cn/api-9020855
 */
final class MailV1MailgroupsMailgroupIdPermissionMembersPermissionMemberId extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id/permission_members/:permission_member_id';

    protected string $httpMethod = 'DELETE';
}
