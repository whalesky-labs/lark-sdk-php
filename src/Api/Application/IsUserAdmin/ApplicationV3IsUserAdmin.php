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

namespace Lark\Api\Application\IsUserAdmin;

use Lark\Request\RestRequest;

/**
 * 校验应用管理员
 *
 * @see https://feishu.apifox.cn/api-9020868
 */
final class ApplicationV3IsUserAdmin extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v3/is_user_admin';

    protected string $httpMethod = 'GET';
}
