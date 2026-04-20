<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 新增协作者
 *
 * @see https://feishu.apifox.cn/api-58963951
 */
final class BitableV1AppsAppTokenRolesRoleIdMembersPost extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/roles/:role_id/members';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
