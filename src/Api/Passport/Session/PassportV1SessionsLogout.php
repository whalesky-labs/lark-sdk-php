<?php

declare(strict_types=1);

namespace Lark\Api\Passport\Session;

use Lark\Request\RestRequest;

/**
 * 退出登录
 *
 * @see https://feishu.apifox.cn/api-362631507
 */
final class PassportV1SessionsLogout extends RestRequest
{
    protected string $apiUri = '/open-apis/passport/v1/sessions/logout';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
