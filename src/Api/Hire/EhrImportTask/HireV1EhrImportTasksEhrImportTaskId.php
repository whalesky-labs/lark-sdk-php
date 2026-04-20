<?php

declare(strict_types=1);

namespace Lark\Api\Hire\EhrImportTask;

use Lark\Request\RestRequest;

/**
 * 更新 e-HR 导入任务结果
 *
 * @see https://feishu.apifox.cn/api-60803199
 */
final class HireV1EhrImportTasksEhrImportTaskId extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/ehr_import_tasks/:ehr_import_task_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
