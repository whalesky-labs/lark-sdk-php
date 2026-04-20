<?php

declare(strict_types=1);

namespace Lark\Api\Acs\User;

use Lark\Request\RestRequest;

/**
 * 获取用户列表
 *
 * @see https://feishu.apifox.cn/api-9020755
 */
final class AcsV1Users extends RestRequest
{
    protected string $apiUri = '/open-apis/acs/v1/users';

    protected string $httpMethod = 'GET';
}
