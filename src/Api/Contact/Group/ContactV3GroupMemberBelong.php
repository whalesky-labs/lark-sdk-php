<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Group;

use Lark\Request\RestRequest;

/**
 * 查询用户所属用户组
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uETNz4SM1MjLxUzM/v3/guides/scope_authority
 */
final class ContactV3GroupMemberBelong extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/group/member_belong';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
