<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Employee;

use Lark\Request\RestRequest;

/**
 * 通过投递 ID 获取入职信息
 *
 * @see https://feishu.apifox.cn/api-11289312
 */
final class HireV1EmployeesGetByApplication extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/employees/get_by_application';

    protected string $httpMethod = 'GET';
}
