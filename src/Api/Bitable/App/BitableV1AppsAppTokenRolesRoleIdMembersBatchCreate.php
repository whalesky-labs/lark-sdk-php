<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 批量新增协作者
 *
 * @see https://feishu.apifox.cn/api-58963532
 */
final class BitableV1AppsAppTokenRolesRoleIdMembersBatchCreate extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/roles/:role_id/members/batch_create';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
