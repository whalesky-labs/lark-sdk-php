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
