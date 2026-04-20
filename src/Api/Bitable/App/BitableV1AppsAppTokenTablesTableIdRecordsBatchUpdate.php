<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 更新多条记录
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uczNzUjL3czM14yN3MTN
 */
final class BitableV1AppsAppTokenTablesTableIdRecordsBatchUpdate extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/tables/:table_id/records/batch_update';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
