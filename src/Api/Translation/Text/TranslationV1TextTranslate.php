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

namespace Lark\Api\Translation\Text;

use Lark\Request\RestRequest;

/**
 * 翻译文本
 *
 * @see https://feishu.apifox.cn/api-9020728
 */
final class TranslationV1TextTranslate extends RestRequest
{
    protected string $apiUri = '/open-apis/translation/v1/text/translate';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
