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

namespace Lark\Api\Vc\Reserve;

use Lark\Request\RestRequest;

/**
 * 删除预约
 *
 * @see https://feishu.apifox.cn/api-9020889
 */
final class VcV1ReservesReserveId extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/reserves/:reserve_id';

    protected string $httpMethod = 'DELETE';
}
