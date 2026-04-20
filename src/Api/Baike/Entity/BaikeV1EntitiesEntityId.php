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
 * 更新免审词条
 *
 * @see https://feishu.apifox.cn/api-60848365
 */
final class BaikeV1EntitiesEntityId extends RestRequest
{
    protected string $apiUri = '/open-apis/baike/v1/entities/:entity_id';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
