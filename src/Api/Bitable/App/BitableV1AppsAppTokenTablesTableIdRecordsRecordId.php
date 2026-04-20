<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 检索记录
 *
 * @see https://feishu.apifox.cn/api-9020911
 */
final class BitableV1AppsAppTokenTablesTableIdRecordsRecordId extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/tables/:table_id/records/:record_id';

    protected string $httpMethod = 'GET';
}
