<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 查询异步任务状态
 *
 * @see https://feishu.apifox.cn/api-58470210
 */
final class DriveV1FilesTaskCheck extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/task_check';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
