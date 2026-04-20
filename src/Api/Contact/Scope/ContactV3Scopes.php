<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Scope;

use Lark\Request\RestRequest;

/**
 * 通讯录权限范围变更
 *
 * @see https://feishu.apifox.cn/api-58177185
 */
final class ContactV3Scopes extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/scopes';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
