<?php

declare(strict_types=1);

namespace Lark\Api\User\AppAdminUser;

use Lark\Request\RestRequest;

/**
 * 查询应用管理员列表
 *
 * @see https://feishu.apifox.cn/api-9020874
 */
final class UserV4AppAdminUserList extends RestRequest
{
    protected string $apiUri = '/open-apis/user/v4/app_admin_user/list';

    protected string $httpMethod = 'GET';
}
