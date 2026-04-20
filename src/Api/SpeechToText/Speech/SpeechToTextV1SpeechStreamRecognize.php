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

namespace Lark\Api\SpeechToText\Speech;

use Lark\Request\RestRequest;

/**
 * 识别流式语音 (ASR)
 *
 * @see https://feishu.apifox.cn/api-11253425
 */
final class SpeechToTextV1SpeechStreamRecognize extends RestRequest
{
    protected string $apiUri = '/open-apis/speech_to_text/v1/speech/stream_recognize';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
