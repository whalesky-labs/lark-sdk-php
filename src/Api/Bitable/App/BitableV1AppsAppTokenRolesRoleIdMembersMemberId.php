<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 删除协作者
 *
 * @see https://feishu.apifox.cn/api-58964039
 */
final class BitableV1AppsAppTokenRolesRoleIdMembersMemberId extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/roles/:role_id/members/:member_id';

    protected string $httpMethod = 'DELETE';
}
