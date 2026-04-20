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

namespace Lark\Api\Vc\Export;

use Lark\Request\RestRequest;

/**
 * 导出会议室预定数据
 *
 * @see https://feishu.apifox.cn/api-59147437
 */
final class VcV1ExportsResourceReservationList extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/exports/resource_reservation_list';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
