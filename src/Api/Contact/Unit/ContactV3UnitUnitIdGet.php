<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Unit;

use Lark\Request\RestRequest;

/**
 * 获取单位信息
 *
 * @see https://feishu.apifox.cn/api-9247216
 */
final class ContactV3UnitUnitIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/unit/:unit_id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
