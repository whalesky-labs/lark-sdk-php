<?php

declare(strict_types=1);

namespace Lark\Api\Contact\User;

use Lark\Request\RestRequest;

/**
 * 获取部门直属用户列表
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uETNz4SM1MjLxUzM/v3/guides/scope_authority
 */
final class ContactV3UsersFindByDepartment extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/users/find_by_department';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
