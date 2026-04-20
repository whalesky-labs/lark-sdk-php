<?php

declare(strict_types=1);

namespace Lark\Api\Docx\Document;

use Lark\Request\RestRequest;

/**
 * 删除块
 *
 * @see https://feishu.apifox.cn/api-58549766
 */
final class DocxV1DocumentsDocumentIdBlocksBlockIdChildrenBatchDelete extends RestRequest
{
    protected string $apiUri = '/open-apis/docx/v1/documents/:document_id/blocks/:block_id/children/batch_delete';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
