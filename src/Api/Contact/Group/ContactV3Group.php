<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Group;

use Lark\Request\RestRequest;

/**
 * 创建用户组
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uETNz4SM1MjLxUzM/v3/guides/scope_authority
 */
final class ContactV3Group extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/group';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
