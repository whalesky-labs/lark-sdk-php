<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Permission;

use Lark\Request\RestRequest;

/**
 * 更新协作者权限
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/drive-v1/permission-member/create
 */
final class DriveV1PermissionsTokenMembersMemberId extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/permissions/:token/members/:member_id';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
