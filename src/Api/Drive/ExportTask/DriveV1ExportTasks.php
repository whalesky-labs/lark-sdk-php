<?php

declare(strict_types=1);

namespace Lark\Api\Drive\ExportTask;

use Lark\Request\RestRequest;

/**
 * 创建导出任务
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/drive-v1/export_task/get
 */
final class DriveV1ExportTasks extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/export_tasks';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
