<?php

declare(strict_types=1);

namespace Lark\Api\Baike\Entity;

use Lark\Request\RestRequest;

/**
 * 模糊搜索词条
 *
 * @see https://feishu.apifox.cn/api-11321082
 */
final class BaikeV1EntitiesSearch extends RestRequest
{
    protected string $apiUri = '/open-apis/baike/v1/entities/search';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
