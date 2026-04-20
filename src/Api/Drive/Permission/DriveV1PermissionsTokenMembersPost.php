<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Permission;

use Lark\Request\RestRequest;

/**
 * 增加协作者权限
 *
 * @see https://feishu.apifox.cn/api-58493082
 */
final class DriveV1PermissionsTokenMembersPost extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/permissions/:token/members';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
