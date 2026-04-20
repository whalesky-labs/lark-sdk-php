<?php

declare(strict_types=1);

namespace Lark\Api\Baike\Entity;

use Lark\Request\RestRequest;

/**
 * 词条高亮
 *
 * @see https://feishu.apifox.cn/api-11321103
 */
final class BaikeV1EntitiesHighlight extends RestRequest
{
    protected string $apiUri = '/open-apis/baike/v1/entities/highlight';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
