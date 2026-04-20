<?php

declare(strict_types=1);

namespace Lark\Api\Contact\Unit;

use Lark\Request\RestRequest;

/**
 * 解除部门与单位的绑定关系
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uETNz4SM1MjLxUzM/v3/guides/scope_authority
 */
final class ContactV3UnitUnbindDepartment extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/unit/unbind_department';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
