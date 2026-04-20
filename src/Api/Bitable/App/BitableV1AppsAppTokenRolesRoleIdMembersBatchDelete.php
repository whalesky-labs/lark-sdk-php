<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 批量删除协作者
 *
 * @see https://feishu.apifox.cn/api-58963324
 */
final class BitableV1AppsAppTokenRolesRoleIdMembersBatchDelete extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/roles/:role_id/members/batch_delete';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
