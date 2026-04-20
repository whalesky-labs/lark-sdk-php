<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 获取表单元数据
 *
 * @see https://feishu.apifox.cn/api-58956188
 */
final class BitableV1AppsAppTokenTablesTableIdFormsFormIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/tables/:table_id/forms/:form_id';

    protected string $httpMethod = 'GET';
}
