<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 列出记录
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uczNzUjL3czM14yN3MTN
 */
final class BitableV1AppsAppTokenTablesTableIdRecords extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/tables/:table_id/records';

    protected string $httpMethod = 'GET';
}
