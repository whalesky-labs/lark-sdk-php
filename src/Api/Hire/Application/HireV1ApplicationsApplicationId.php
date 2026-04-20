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

namespace Lark\Api\Hire\Application;

use Lark\Request\RestRequest;

/**
 * 获取投递信息
 *
 * @see https://feishu.apifox.cn/api-11283507
 */
final class HireV1ApplicationsApplicationId extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/applications/:application_id';

    protected string $httpMethod = 'GET';
}
