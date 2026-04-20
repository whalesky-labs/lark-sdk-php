<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Permission;

use Lark\Request\RestRequest;

/**
 * 判断协作者是否有某权限
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uczNzUjL3czM14yN3MTN
 */
final class DrivePermissionMemberPermitted extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/permission/member/permitted';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
