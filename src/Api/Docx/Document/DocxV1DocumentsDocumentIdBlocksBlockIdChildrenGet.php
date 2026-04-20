<?php

declare(strict_types=1);

namespace Lark\Api\Docx\Document;

use Lark\Request\RestRequest;

/**
 * 获取所有子块
 *
 * @see https://feishu.apifox.cn/api-58550452
 */
final class DocxV1DocumentsDocumentIdBlocksBlockIdChildrenGet extends RestRequest
{
    protected string $apiUri = '/open-apis/docx/v1/documents/:document_id/blocks/:block_id/children';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
