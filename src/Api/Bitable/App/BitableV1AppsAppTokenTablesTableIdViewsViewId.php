<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 更新视图
 *
 * @see https://feishu.apifox.cn/api-58955066
 */
final class BitableV1AppsAppTokenTablesTableIdViewsViewId extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/tables/:table_id/views/:view_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
