<?php

declare(strict_types=1);

namespace Lark\Api\Doc\Doctoken;

use Lark\Request\RestRequest;

/**
 * 获取文档富文本内容
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/docs-doc-overview
 */
final class DocV2DoctokenContent extends RestRequest
{
    protected string $apiUri = '/open-apis/doc/v2/:docToken/content';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
