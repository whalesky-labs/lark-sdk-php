<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 删除一个数据表
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uczNzUjL3czM14yN3MTN
 */
final class BitableV1AppsAppTokenTablesTableIdDelete extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/tables/:table_id';

    protected string $httpMethod = 'DELETE';
}
