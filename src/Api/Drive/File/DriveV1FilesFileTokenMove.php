<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 移动文件
 *
 * @see https://feishu.apifox.cn/api-58467744
 */
final class DriveV1FilesFileTokenMove extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/move';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
