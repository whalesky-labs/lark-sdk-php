<?php

declare(strict_types=1);

namespace Lark\Api\Doc\Doctoken;

use Lark\Request\RestRequest;

/**
 * 获取文档文本内容
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/document-docx/docx-v1/document/raw_content
 */
final class DocV2DoctokenRawContent extends RestRequest
{
    protected string $apiUri = '/open-apis/doc/v2/:docToken/raw_content';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
