<?php

declare(strict_types=1);

namespace Lark\Api\Authen\AccessToken;

use Lark\Request\RestRequest;

/**
 * 获取 user_access_token
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ukzN4UjL5cDO14SO3gTN
 */
final class AuthenV1AccessToken extends RestRequest
{
    protected string $apiUri = '/open-apis/authen/v1/access_token';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
