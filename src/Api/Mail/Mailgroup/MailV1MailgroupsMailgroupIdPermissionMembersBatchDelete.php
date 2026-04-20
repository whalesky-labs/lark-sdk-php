<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 批量删除邮件组权限成员
 *
 * @see https://feishu.apifox.cn/api-60071696
 */
final class MailV1MailgroupsMailgroupIdPermissionMembersBatchDelete extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id/permission_members/batch_delete';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
