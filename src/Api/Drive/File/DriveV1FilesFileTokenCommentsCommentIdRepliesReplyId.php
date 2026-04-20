<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 更新回复
 *
 * @see https://feishu.apifox.cn/api-9844999
 */
final class DriveV1FilesFileTokenCommentsCommentIdRepliesReplyId extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/comments/:comment_id/replies/:reply_id';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
