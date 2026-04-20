<?php

declare(strict_types=1);

namespace Lark\Api\Acs\User;

use Lark\Request\RestRequest;

/**
 * 获取单个用户信息
 *
 * @see https://feishu.apifox.cn/api-9020754
 */
final class AcsV1UsersUserId extends RestRequest
{
    protected string $apiUri = '/open-apis/acs/v1/users/:user_id';

    protected string $httpMethod = 'GET';
}
