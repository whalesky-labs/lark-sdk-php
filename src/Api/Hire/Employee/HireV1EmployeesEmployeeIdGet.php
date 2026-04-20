<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Employee;

use Lark\Request\RestRequest;

/**
 * 通过员工 ID 获取入职信息
 *
 * @see https://feishu.apifox.cn/api-11290025
 */
final class HireV1EmployeesEmployeeIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/employees/:employee_id';

    protected string $httpMethod = 'GET';
}
