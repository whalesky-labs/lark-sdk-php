<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Media;

use Lark\Request\RestRequest;

/**
 * 上传素材
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/drive-v1/media/multipart-upload-media/introduction
 */
final class DriveV1MediasUploadAll extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/medias/upload_all';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
