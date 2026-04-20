<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Permission;

use Lark\Request\RestRequest;

/**
 * 更新云文档权限设置
 *
 * @see https://feishu.apifox.cn/api-58501048
 */
final class DriveV1PermissionsTokenPublicPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/permissions/:token/public';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
