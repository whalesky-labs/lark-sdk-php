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

namespace Lark\Api\Application\App;

use Lark\Request\RestRequest;

/**
 * 获取企业安装的应用
 *
 * @see https://feishu.apifox.cn/api-9020872
 */
final class ApplicationV3AppList extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v3/app/list';

    protected string $httpMethod = 'GET';
}
