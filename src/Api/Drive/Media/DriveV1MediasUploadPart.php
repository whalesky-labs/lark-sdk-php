<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Media;

use Lark\Request\RestRequest;

/**
 * 分片上传素材（上传分片）
 *
 * @see https://feishu.apifox.cn/api-9812512
 */
final class DriveV1MediasUploadPart extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/medias/upload_part';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
