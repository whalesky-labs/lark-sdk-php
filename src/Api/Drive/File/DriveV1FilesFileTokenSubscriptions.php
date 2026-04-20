<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 创建订阅
 *
 * @see https://feishu.apifox.cn/api-58969239
 */
final class DriveV1FilesFileTokenSubscriptions extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/subscriptions';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
