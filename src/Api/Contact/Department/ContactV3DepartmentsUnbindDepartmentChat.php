<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Department;

use Lark\Request\RestRequest;

/**
 * 部门群转为普通群
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uETNz4SM1MjLxUzM/v3/guides/scope_authority
 */
final class ContactV3DepartmentsUnbindDepartmentChat extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/departments/unbind_department_chat';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
