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

namespace Lark\Api\Acs\User;

use Lark\Request\RestRequest;

/**
 * 获取用户列表
 *
 * @see https://feishu.apifox.cn/api-9020755
 */
final class AcsV1Users extends RestRequest
{
    protected string $apiUri = '/open-apis/acs/v1/users';

    protected string $httpMethod = 'GET';
}
