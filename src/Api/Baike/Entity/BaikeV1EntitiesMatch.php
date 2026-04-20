<?php

declare(strict_types=1);

namespace Lark\Api\Baike\Entity;

use Lark\Request\RestRequest;

/**
 * 精准搜索词条
 *
 * @see https://feishu.apifox.cn/api-11320913
 */
final class BaikeV1EntitiesMatch extends RestRequest
{
    protected string $apiUri = '/open-apis/baike/v1/entities/match';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
