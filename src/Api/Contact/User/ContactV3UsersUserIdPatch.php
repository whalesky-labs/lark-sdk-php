<?php

declare(strict_types=1);

namespace Lark\Api\Contact\User;

use Lark\Request\RestRequest;

/**
 * 修改用户部分信息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN#74588198
 */
final class ContactV3UsersUserIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/users/:user_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
