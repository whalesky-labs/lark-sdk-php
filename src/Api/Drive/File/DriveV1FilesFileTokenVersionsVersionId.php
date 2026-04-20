<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 删除文档版本
 *
 * @see https://feishu.apifox.cn/api-58485408
 */
final class DriveV1FilesFileTokenVersionsVersionId extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/versions/:version_id';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
