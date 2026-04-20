<?php

declare(strict_types=1);

namespace Lark\Api\Doc\Doctoken;

use Lark\Request\RestRequest;

/**
 * 编辑文档内容
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/docs-doc-overview
 */
final class DocV2DoctokenBatchUpdate extends RestRequest
{
    protected string $apiUri = '/open-apis/doc/v2/:docToken/batch_update';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
