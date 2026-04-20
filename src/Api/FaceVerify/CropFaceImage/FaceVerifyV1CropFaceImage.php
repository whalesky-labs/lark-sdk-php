<?php

declare(strict_types=1);

namespace Lark\Api\FaceVerify\CropFaceImage;

use Lark\Request\RestRequest;

/**
 * 裁剪人脸图片
 *
 * @see https://feishu.apifox.cn/api-11310022
 */
final class FaceVerifyV1CropFaceImage extends RestRequest
{
    protected string $apiUri = '/open-apis/face_verify/v1/crop_face_image';

    protected string $httpMethod = 'POST';
}
