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

namespace Lark\Api\Contact\User;

use Lark\Request\RestRequest;

/**
 * 获取应用管理员管理范围
 *
 * @see https://feishu.apifox.cn/api-9020869
 */
final class ContactV1UserAdminScopeGet extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v1/user/admin_scope/get';

    protected string $httpMethod = 'GET';
}
