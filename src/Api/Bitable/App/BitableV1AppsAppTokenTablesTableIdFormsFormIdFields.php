<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 列出表单问题
 *
 * @see https://feishu.apifox.cn/api-58958068
 */
final class BitableV1AppsAppTokenTablesTableIdFormsFormIdFields extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/tables/:table_id/forms/:form_id/fields';

    protected string $httpMethod = 'GET';
}
