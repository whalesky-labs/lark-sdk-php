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

namespace Lark\Api\Contact\EmployeeTypeEnum;

use Lark\Request\RestRequest;

/**
 * 删除人员类型
 *
 * @see https://feishu.apifox.cn/api-9021011
 */
final class ContactV3EmployeeTypeEnumsEnumId extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/employee_type_enums/:enum_id';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
