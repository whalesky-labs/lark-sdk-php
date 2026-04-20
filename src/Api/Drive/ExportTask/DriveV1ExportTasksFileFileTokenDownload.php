<?php

declare(strict_types=1);

namespace Lark\Api\Drive\ExportTask;

use Lark\Request\RestRequest;

/**
 * 下载导出文件
 *
 * @see https://feishu.apifox.cn/api-58484263
 */
final class DriveV1ExportTasksFileFileTokenDownload extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/export_tasks/file/:file_token/download';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
