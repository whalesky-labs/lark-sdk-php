<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 分片上传文件（完成上传）
 *
 * @see https://feishu.apifox.cn/api-9395434
 */
final class DriveV1FilesUploadFinish extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/upload_finish';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
