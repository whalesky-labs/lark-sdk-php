<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

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
