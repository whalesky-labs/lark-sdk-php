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

namespace Lark\Api\Doc\Doctoken;

use Lark\Request\RestRequest;

/**
 * 获取文档中的电子表格的元数据
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uczNzUjL3czM14yN3MTN)
 */
final class DocV2DoctokenSheetMeta extends RestRequest
{
    protected string $apiUri = '/open-apis/doc/v2/:docToken/sheet_meta';

    protected string $httpMethod = 'GET';
}
