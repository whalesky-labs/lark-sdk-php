<?php

declare(strict_types=1);

namespace Lark\Api\Docx\Document;

use Lark\Request\RestRequest;

/**
 * 获取文档纯文本内容
 *
 * @see https://feishu.apifox.cn/api-58538009
 */
final class DocxV1DocumentsDocumentIdRawContent extends RestRequest
{
    protected string $apiUri = '/open-apis/docx/v1/documents/:document_id/raw_content';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
