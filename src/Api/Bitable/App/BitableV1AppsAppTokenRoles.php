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

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 列出自定义角色
 *
 * @see https://feishu.apifox.cn/api-58961268
 */
final class BitableV1AppsAppTokenRoles extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/roles';

    protected string $httpMethod = 'GET';
}
