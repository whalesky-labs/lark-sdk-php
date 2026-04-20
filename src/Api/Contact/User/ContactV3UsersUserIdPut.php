<?php

declare(strict_types=1);

namespace Lark\Api\Contact\User;

use Lark\Request\RestRequest;

/**
 * 更新用户所有信息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN#74588198
 */
final class ContactV3UsersUserIdPut extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/users/:user_id';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
