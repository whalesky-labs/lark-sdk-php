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
 * 修改用户部分信息
 *
 * @see https://feishu.apifox.cn/api-9020756
 */
final class AcsV1UsersUserIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/acs/v1/users/:user_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
