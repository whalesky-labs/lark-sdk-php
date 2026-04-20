<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Department;

use Lark\Request\RestRequest;

/**
 * 删除部门
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uETNz4SM1MjLxUzM/v3/guides/scope_authority
 */
final class ContactV3DepartmentsDepartmentId extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/departments/:department_id';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
