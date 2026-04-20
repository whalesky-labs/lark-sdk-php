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

namespace Lark\Api\Vc\Export;

use Lark\Request\RestRequest;

/**
 * 下载导出文件
 *
 * @see https://feishu.apifox.cn/api-59147638
 */
final class VcV1ExportsDownload extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/exports/download';

    protected string $httpMethod = 'GET';
}
