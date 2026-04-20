<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

namespace Lark\Api\Hire\Employee;

use Lark\Request\RestRequest;

/**
 * 更新入职状态
 *
 * @see https://feishu.apifox.cn/api-11288151
 */
final class HireV1EmployeesEmployeeId extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/employees/:employee_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
