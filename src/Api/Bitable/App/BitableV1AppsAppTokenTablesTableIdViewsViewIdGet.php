<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 检索视图
 *
 * @see https://feishu.apifox.cn/api-58955123
 */
final class BitableV1AppsAppTokenTablesTableIdViewsViewIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/tables/:table_id/views/:view_id';

    protected string $httpMethod = 'GET';
}
