<?php

declare(strict_types=1);

namespace Lark\Api\Contact\User;

use Lark\Request\RestRequest;

/**
 * 获取单个用户信息
 *
 * @see https://feishu.apifox.cn/api-9021015
 */
final class ContactV3UsersUserIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/users/:user_id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
