<?php

declare(strict_types=1);

namespace Lark\Api\Doc\Meta;

use Lark\Request\RestRequest;

/**
 * 获取文档元信息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uczNzUjL3czM14yN3MTN
 */
final class DocV2MetaDoctoken extends RestRequest
{
    protected string $apiUri = '/open-apis/doc/v2/meta/:docToken';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
