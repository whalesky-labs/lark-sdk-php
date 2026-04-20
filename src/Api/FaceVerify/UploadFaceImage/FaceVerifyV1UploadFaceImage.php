<?php

declare(strict_types=1);

namespace Lark\Api\FaceVerify\UploadFaceImage;

use Lark\Request\RestRequest;

/**
 * 上传人脸基准图片
 *
 * @see https://feishu.apifox.cn/api-11309753
 */
final class FaceVerifyV1UploadFaceImage extends RestRequest
{
    protected string $apiUri = '/open-apis/face_verify/v1/upload_face_image';

    protected string $httpMethod = 'POST';
}
