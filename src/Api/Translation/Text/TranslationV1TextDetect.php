<?php

declare(strict_types=1);

namespace Lark\Api\Translation\Text;

use Lark\Request\RestRequest;

/**
 * 识别文本语种
 *
 * @see https://feishu.apifox.cn/api-9020729
 */
final class TranslationV1TextDetect extends RestRequest
{
    protected string $apiUri = '/open-apis/translation/v1/text/detect';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
