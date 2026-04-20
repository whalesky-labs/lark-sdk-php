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

namespace Lark\Api\Verification\Verification;

use Lark\Request\RestRequest;

/**
 * 获取认证信息
 *
 * @see https://feishu.apifox.cn/api-60207720
 */
final class VerificationV1Verification extends RestRequest
{
    protected string $apiUri = '/open-apis/verification/v1/verification';

    protected string $httpMethod = 'GET';
}
