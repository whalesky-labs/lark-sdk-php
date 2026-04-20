<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 删除自定义角色
 *
 * @see https://feishu.apifox.cn/api-58962762
 */
final class BitableV1AppsAppTokenRolesRoleId extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/roles/:role_id';

    protected string $httpMethod = 'DELETE';
}
