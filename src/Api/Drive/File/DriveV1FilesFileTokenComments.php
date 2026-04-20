<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 分页获取文档评论
 *
 * @see https://feishu.apifox.cn/api-58525592
 */
final class DriveV1FilesFileTokenComments extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/comments';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
