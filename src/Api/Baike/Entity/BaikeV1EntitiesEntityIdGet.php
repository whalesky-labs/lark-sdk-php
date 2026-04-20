<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

namespace Lark\Api\Baike\Entity;

use Lark\Request\RestRequest;

/**
 * 获取词条详情
 *
 * @see https://feishu.apifox.cn/api-11319123
 */
final class BaikeV1EntitiesEntityIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/baike/v1/entities/:entity_id';

    protected string $httpMethod = 'GET';
}
