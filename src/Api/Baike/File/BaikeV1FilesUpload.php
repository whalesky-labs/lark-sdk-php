<?php

declare(strict_types=1);

namespace Lark\Api\Baike\File;

use Lark\Request\RestRequest;

/**
 * 上传图片
 *
 * @see https://feishu.apifox.cn/api-60853084
 */
final class BaikeV1FilesUpload extends RestRequest
{
    protected string $apiUri = '/open-apis/baike/v1/files/upload';

    protected string $httpMethod = 'POST';
}
