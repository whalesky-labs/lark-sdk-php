<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 更新表单问题
 *
 * @see https://feishu.apifox.cn/api-58957318
 */
final class BitableV1AppsAppTokenTablesTableIdFormsFormIdFieldsFieldId extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/tables/:table_id/forms/:form_id/fields/:field_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
