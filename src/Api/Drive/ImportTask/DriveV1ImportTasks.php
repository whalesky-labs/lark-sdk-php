<?php

declare(strict_types=1);

namespace Lark\Api\Drive\ImportTask;

use Lark\Request\RestRequest;

/**
 * 创建导入任务
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/drive-v1/import_task/import-user-guide
 */
final class DriveV1ImportTasks extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/import_tasks';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
