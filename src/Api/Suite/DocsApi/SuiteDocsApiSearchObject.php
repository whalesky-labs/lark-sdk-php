<?php

declare(strict_types=1);

namespace Lark\Api\Suite\DocsApi;

use Lark\Request\RestRequest;

/**
 * 文档搜素
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN
 */
final class SuiteDocsApiSearchObject extends RestRequest
{
    protected string $apiUri = '/open-apis/suite/docs-api/search/object';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
