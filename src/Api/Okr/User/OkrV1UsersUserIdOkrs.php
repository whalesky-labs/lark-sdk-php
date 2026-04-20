<?php

declare(strict_types=1);

namespace Lark\Api\Okr\User;

use Lark\Request\RestRequest;

/**
 * 获取用户的 OKR 列表
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uQjN3QjL0YzN04CN2cDN
 */
final class OkrV1UsersUserIdOkrs extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/users/:user_id/okrs';

    protected string $httpMethod = 'GET';
}
