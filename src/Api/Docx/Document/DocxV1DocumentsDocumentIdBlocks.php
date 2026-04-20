<?php

declare(strict_types=1);

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
