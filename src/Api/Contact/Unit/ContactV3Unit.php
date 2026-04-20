<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Unit;

use Lark\Request\RestRequest;

/**
 * 创建单位
 *
 * @see https://feishu.apifox.cn/api-9239720
 */
final class ContactV3Unit extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/unit';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
