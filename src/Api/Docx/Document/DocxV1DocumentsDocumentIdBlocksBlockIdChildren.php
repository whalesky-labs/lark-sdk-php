<?php

declare(strict_types=1);

namespace Lark\Api\Docx\Document;

use Lark\Request\RestRequest;

/**
 * 创建块
 *
 * @see https://feishu.apifox.cn/api-58543084
 */
final class DocxV1DocumentsDocumentIdBlocksBlockIdChildren extends RestRequest
{
    protected string $apiUri = '/open-apis/docx/v1/documents/:document_id/blocks/:block_id/children';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
