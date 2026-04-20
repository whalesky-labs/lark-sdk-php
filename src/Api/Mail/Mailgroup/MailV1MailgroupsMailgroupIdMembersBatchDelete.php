<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 批量删除邮件组成员
 *
 * @see https://feishu.apifox.cn/api-60059280
 */
final class MailV1MailgroupsMailgroupIdMembersBatchDelete extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id/members/batch_delete';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
