<?php

declare(strict_types=1);

namespace Lark\Api\Docx\Document;

use Lark\Request\RestRequest;

/**
 * 更新块
 *
 * @see https://feishu.apifox.cn/api-58546710
 */
final class DocxV1DocumentsDocumentIdBlocksBlockIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/docx/v1/documents/:document_id/blocks/:block_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
