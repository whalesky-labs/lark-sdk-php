<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 分片上传文件（预上传）
 *
 * @see https://feishu.apifox.cn/api-9390626
 */
final class DriveV1FilesUploadPrepare extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/upload_prepare';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
