<?php

declare(strict_types=1);

namespace Lark\Api\Baike\Entity;

use Lark\Request\RestRequest;

/**
 * 获取词条列表
 *
 * @see https://feishu.apifox.cn/api-11320033
 */
final class BaikeV1EntitiesGet extends RestRequest
{
    protected string $apiUri = '/open-apis/baike/v1/entities';

    protected string $httpMethod = 'GET';
}
