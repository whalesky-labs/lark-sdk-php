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

namespace Lark\Api\Vc\Report;

use Lark\Request\RestRequest;

/**
 * 获取top用户列表
 *
 * @see https://feishu.apifox.cn/api-9020878
 */
final class VcV1ReportsGetTopUser extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/reports/get_top_user';

    protected string $httpMethod = 'GET';
}
