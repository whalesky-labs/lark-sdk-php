<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 列出协作者
 *
 * @see https://feishu.apifox.cn/api-58963762
 */
final class BitableV1AppsAppTokenRolesRoleIdMembers extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/roles/:role_id/members';

    protected string $httpMethod = 'GET';
}
