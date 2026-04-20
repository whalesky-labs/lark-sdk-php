<?php

declare(strict_types=1);

namespace Lark\Api\Contact\EmployeeTypeEnum;

use Lark\Request\RestRequest;

/**
 * 查询人员类型
 *
 * @see https://feishu.apifox.cn/api-9021009
 */
final class ContactV3EmployeeTypeEnumsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/employee_type_enums';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
