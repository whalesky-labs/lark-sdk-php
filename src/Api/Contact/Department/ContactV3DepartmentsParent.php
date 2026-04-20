<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Department;

use Lark\Request\RestRequest;

/**
 * 获取父部门信息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uETNz4SM1MjLxUzM/v3/guides/scope_authority
 */
final class ContactV3DepartmentsParent extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/departments/parent';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
