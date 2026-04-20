<?php

declare(strict_types=1);

namespace Lark\Api\Authen\UserInfo;

use Lark\Request\RestRequest;

/**
 * 获取登录用户信息
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/authentication-management/access-token/get-user-access-token)。
 */
final class AuthenV1UserInfo extends RestRequest
{
    protected string $apiUri = '/open-apis/authen/v1/user_info';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
