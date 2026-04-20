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

namespace Lark\Api\Docx\Document;

use Lark\Request\RestRequest;

/**
 * 获取文档所有块
 *
 * @see https://feishu.apifox.cn/api-58538969
 */
final class DocxV1DocumentsDocumentIdBlocks extends RestRequest
{
    protected string $apiUri = '/open-apis/docx/v1/documents/:document_id/blocks';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
