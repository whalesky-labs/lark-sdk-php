<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Public;

use Lark\Request\RestRequest;

/**
 * 获取文档公共设置V2
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/files/guide/introduction)
 */
final class DrivePermissionV2Public extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/permission/v2/public/';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
