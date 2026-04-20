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
 * 获取单个用户信息
 *
 * @see https://feishu.apifox.cn/api-9021015
 */
final class ContactV3UsersUserIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/users/:user_id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
