<?php

declare(strict_types=1);

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
