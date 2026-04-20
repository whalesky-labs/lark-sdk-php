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

namespace Lark\Api\Admin\Password;

use Lark\Request\RestRequest;

/**
 * 重置用户的企业邮箱密码
 *
 * @see https://feishu.apifox.cn/api-60280965
 */
final class AdminV1PasswordReset extends RestRequest
{
    protected string $apiUri = '/open-apis/admin/v1/password/reset';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
