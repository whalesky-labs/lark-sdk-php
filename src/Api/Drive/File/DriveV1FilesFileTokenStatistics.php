<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 获取文件统计信息
 *
 * @see https://feishu.apifox.cn/api-58469149
 */
final class DriveV1FilesFileTokenStatistics extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/statistics';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
