<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 解决/恢复 评论
 *
 * @see https://feishu.apifox.cn/api-9848657
 */
final class DriveV1FilesFileTokenCommentsCommentIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/comments/:comment_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
