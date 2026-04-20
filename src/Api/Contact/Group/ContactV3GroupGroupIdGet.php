<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Group;

use Lark\Request\RestRequest;

/**
 * 查询指定用户组
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uETNz4SM1MjLxUzM/v3/guides/scope_authority
 */
final class ContactV3GroupGroupIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/group/:group_id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
