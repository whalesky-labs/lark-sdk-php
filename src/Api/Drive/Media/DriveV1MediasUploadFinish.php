<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Media;

use Lark\Request\RestRequest;

/**
 * 分片上传素材（完成上传）
 *
 * @see https://feishu.apifox.cn/api-9824360
 */
final class DriveV1MediasUploadFinish extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/medias/upload_finish';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
