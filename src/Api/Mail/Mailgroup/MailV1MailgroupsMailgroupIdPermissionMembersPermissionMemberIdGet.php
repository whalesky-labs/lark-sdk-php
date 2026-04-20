<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 获取邮件组权限成员
 *
 * @see https://feishu.apifox.cn/api-9020853
 */
final class MailV1MailgroupsMailgroupIdPermissionMembersPermissionMemberIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id/permission_members/:permission_member_id';

    protected string $httpMethod = 'GET';
}
