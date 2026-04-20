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
 * 通过投递 ID 获取入职信息
 *
 * @see https://feishu.apifox.cn/api-11289312
 */
final class HireV1EmployeesGetByApplication extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/employees/get_by_application';

    protected string $httpMethod = 'GET';
}
