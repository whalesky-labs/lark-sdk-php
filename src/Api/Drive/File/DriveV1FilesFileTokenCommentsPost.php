<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 添加评论
 *
 * @see https://feishu.apifox.cn/api-9837733
 */
final class DriveV1FilesFileTokenCommentsPost extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/comments';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
