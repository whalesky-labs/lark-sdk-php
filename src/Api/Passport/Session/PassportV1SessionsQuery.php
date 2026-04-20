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

namespace Lark\Api\Passport\Session;

use Lark\Request\RestRequest;

/**
 * 批量获取脱敏的用户登录信息
 *
 * @see https://feishu.apifox.cn/api-58167779
 */
final class PassportV1SessionsQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/passport/v1/sessions/query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
