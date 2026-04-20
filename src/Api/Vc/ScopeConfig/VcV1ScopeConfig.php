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

namespace Lark\Api\Vc\ScopeConfig;

use Lark\Request\RestRequest;

/**
 * 查询会议室配置
 *
 * @see https://feishu.apifox.cn/api-59155876
 */
final class VcV1ScopeConfig extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/scope_config';

    protected string $httpMethod = 'GET';
}
