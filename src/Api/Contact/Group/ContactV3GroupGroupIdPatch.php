<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Group;

use Lark\Request\RestRequest;

/**
 * 更新用户组
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uETNz4SM1MjLxUzM/v3/guides/scope_authority
 */
final class ContactV3GroupGroupIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/group/:group_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
