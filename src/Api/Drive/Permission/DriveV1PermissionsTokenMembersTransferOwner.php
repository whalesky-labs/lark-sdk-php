<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Permission;

use Lark\Request\RestRequest;

/**
 * 转移所有者
 *
 * @see https://feishu.apifox.cn/api-58491238
 */
final class DriveV1PermissionsTokenMembersTransferOwner extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/permissions/:token/members/transfer_owner';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
