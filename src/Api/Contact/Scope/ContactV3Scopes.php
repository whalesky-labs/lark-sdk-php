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

namespace Lark\Api\Contact\Scope;

use Lark\Request\RestRequest;

/**
 * 通讯录权限范围变更
 *
 * @see https://feishu.apifox.cn/api-58177185
 */
final class ContactV3Scopes extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/scopes';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
