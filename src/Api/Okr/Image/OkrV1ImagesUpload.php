<?php

declare(strict_types=1);

namespace Lark\Api\Okr\Image;

use Lark\Request\RestRequest;

/**
 * 上传进展记录图片
 *
 * @see https://feishu.apifox.cn/api-60826739
 */
final class OkrV1ImagesUpload extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/images/upload';

    protected string $httpMethod = 'POST';
}
