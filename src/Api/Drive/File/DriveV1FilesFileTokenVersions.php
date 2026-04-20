<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 创建文档版本
 *
 * @see https://feishu.apifox.cn/api-58485218
 */
final class DriveV1FilesFileTokenVersions extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/versions';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
