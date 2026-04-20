<?php

declare(strict_types=1);

namespace Lark\Api\Mail\Mailgroup;

use Lark\Request\RestRequest;

/**
 * 批量创建邮件组成员
 *
 * @see https://feishu.apifox.cn/api-60058909
 */
final class MailV1MailgroupsMailgroupIdMembersBatchCreate extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/mailgroups/:mailgroup_id/members/batch_create';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
