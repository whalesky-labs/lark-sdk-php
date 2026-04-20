<?php

declare(strict_types=1);

namespace Lark\Api\Drive\ExportTask;

use Lark\Request\RestRequest;

/**
 * 查询导出任务结果
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/docs-overview#51f94b41
 */
final class DriveV1ExportTasksTicket extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/export_tasks/:ticket';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
