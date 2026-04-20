<?php

declare(strict_types=1);

namespace Lark\Api\Contact\User;

use Lark\Request\RestRequest;

/**
 * 获取应用管理员管理范围
 *
 * @see https://feishu.apifox.cn/api-9020869
 */
final class ContactV1UserAdminScopeGet extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v1/user/admin_scope/get';

    protected string $httpMethod = 'GET';
}
