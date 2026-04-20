<?php

declare(strict_types=1);

namespace Lark\Api\Contact\User;

use Lark\Request\RestRequest;

/**
 * 通过手机号或邮箱获取用户 ID
 *
 * @see https://feishu.apifox.cn/api-9089109
 */
final class ContactV3UsersBatchGetId extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/users/batch_get_id';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
