<?php

declare(strict_types=1);

namespace Lark\Api\Contact\EmployeeTypeEnum;

use Lark\Request\RestRequest;

/**
 * 新增人员类型
 *
 * @see https://feishu.apifox.cn/api-9021012
 */
final class ContactV3EmployeeTypeEnums extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/employee_type_enums';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
