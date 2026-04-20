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

namespace Lark\Api\Baike\Classification;

use Lark\Request\RestRequest;

/**
 * 获取百科分类
 *
 * @see https://feishu.apifox.cn/api-60851655
 */
final class BaikeV1Classifications extends RestRequest
{
    protected string $apiUri = '/open-apis/baike/v1/classifications';

    protected string $httpMethod = 'GET';
}
