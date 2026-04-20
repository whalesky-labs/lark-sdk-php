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

namespace Lark\Api\Contact\Department;

use Lark\Request\RestRequest;

/**
 * 获取单个部门信息
 *
 * @see https://feishu.apifox.cn/api-9021002
 */
final class ContactV3DepartmentsDepartmentIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/departments/:department_id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
