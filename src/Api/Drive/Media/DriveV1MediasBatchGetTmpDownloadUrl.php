<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Media;

use Lark\Request\RestRequest;

/**
 * 获取素材临时下载链接
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/drive-v1/media/introduction)
 */
final class DriveV1MediasBatchGetTmpDownloadUrl extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/medias/batch_get_tmp_download_url';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
