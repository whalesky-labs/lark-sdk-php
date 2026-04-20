<?php

declare(strict_types=1);

namespace Lark\Api\Baike\Entity;

use Lark\Request\RestRequest;

/**
 * 提取潜在的百科词条
 *
 * @see https://feishu.apifox.cn/api-60850692
 */
final class BaikeV1EntitiesExtract extends RestRequest
{
    protected string $apiUri = '/open-apis/baike/v1/entities/extract';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
