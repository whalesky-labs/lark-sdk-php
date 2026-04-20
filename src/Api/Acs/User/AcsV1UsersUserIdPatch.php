<?php

declare(strict_types=1);

namespace Lark\Api\Acs\User;

use Lark\Request\RestRequest;

/**
 * 修改用户部分信息
 *
 * @see https://feishu.apifox.cn/api-9020756
 */
final class AcsV1UsersUserIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/acs/v1/users/:user_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
