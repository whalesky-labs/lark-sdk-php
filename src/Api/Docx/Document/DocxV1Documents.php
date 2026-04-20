<?php

declare(strict_types=1);

namespace Lark\Api\Docx\Document;

use Lark\Request\RestRequest;

/**
 * 创建文档
 *
 * @see https://feishu.apifox.cn/api-58540235
 */
final class DocxV1Documents extends RestRequest
{
    protected string $apiUri = '/open-apis/docx/v1/documents';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
