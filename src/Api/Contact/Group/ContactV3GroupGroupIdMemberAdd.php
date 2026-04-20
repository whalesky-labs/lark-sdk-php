<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Group;

use Lark\Request\RestRequest;

/**
 * 添加用户组成员
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uETNz4SM1MjLxUzM/v3/guides/scope_authority
 */
final class ContactV3GroupGroupIdMemberAdd extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/group/:group_id/member/add';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
