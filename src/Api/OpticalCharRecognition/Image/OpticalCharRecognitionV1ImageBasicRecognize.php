<?php

declare(strict_types=1);

namespace Lark\Api\OpticalCharRecognition\Image;

use Lark\Request\RestRequest;

/**
 * 识别图片中的文字
 *
 * @see https://feishu.apifox.cn/api-9020727
 */
final class OpticalCharRecognitionV1ImageBasicRecognize extends RestRequest
{
    protected string $apiUri = '/open-apis/optical_char_recognition/v1/image/basic_recognize';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
