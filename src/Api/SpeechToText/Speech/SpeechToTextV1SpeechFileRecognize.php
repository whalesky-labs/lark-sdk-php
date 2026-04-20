<?php

declare(strict_types=1);

namespace Lark\Api\SpeechToText\Speech;

use Lark\Request\RestRequest;

/**
 * 识别语音文件 (ASR)
 *
 * @see https://feishu.apifox.cn/api-11254896
 */
final class SpeechToTextV1SpeechFileRecognize extends RestRequest
{
    protected string $apiUri = '/open-apis/speech_to_text/v1/speech/file_recognize';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
