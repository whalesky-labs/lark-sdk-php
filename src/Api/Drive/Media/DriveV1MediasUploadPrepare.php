<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Media;

use Lark\Request\RestRequest;

/**
 * 分片上传素材（预上传）
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uczNzUjL3czM14yN3MTN
 */
final class DriveV1MediasUploadPrepare extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/medias/upload_prepare';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
