<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 获取评论
 *
 * @see https://feishu.apifox.cn/api-9835267
 */
final class DriveV1FilesFileTokenCommentsCommentId extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/comments/:comment_id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
