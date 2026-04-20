<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Permission;

use Lark\Request\RestRequest;

/**
 * 获取云文档权限设置
 *
 * @see https://feishu.apifox.cn/api-58499700
 */
final class DriveV1PermissionsTokenPublic extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/permissions/:token/public';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
