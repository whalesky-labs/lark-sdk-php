<?php

declare(strict_types=1);

namespace Lark\Api\Contact\EmployeeTypeEnum;

use Lark\Request\RestRequest;

/**
 * 更新人员类型
 *
 * @see https://feishu.apifox.cn/api-9021010
 */
final class ContactV3EmployeeTypeEnumsEnumIdPut extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/employee_type_enums/:enum_id';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
