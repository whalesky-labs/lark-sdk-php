<?php

declare(strict_types=1);

namespace Lark\Api\Mail\User;

use Lark\Request\RestRequest;

/**
 * 查询邮箱地址状态
 *
 * @see https://feishu.apifox.cn/api-60085536
 */
final class MailV1UsersQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/mail/v1/users/query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
