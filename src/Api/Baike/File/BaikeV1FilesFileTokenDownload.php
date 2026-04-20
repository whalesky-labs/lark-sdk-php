<?php

declare(strict_types=1);

namespace Lark\Api\Baike\File;

use Lark\Request\RestRequest;

/**
 * 下载图片
 *
 * @see https://feishu.apifox.cn/api-60853540
 */
final class BaikeV1FilesFileTokenDownload extends RestRequest
{
    protected string $apiUri = '/open-apis/baike/v1/files/:file_token/download';

    protected string $httpMethod = 'GET';
}
