<?php

declare(strict_types=1);

namespace Lark\Api\Doc\Create;

use Lark\Request\RestRequest;

/**
 * 创建文档
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/docs-doc-overview
 */
final class DocV2Create extends RestRequest
{
    protected string $apiUri = '/open-apis/doc/v2/create';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
