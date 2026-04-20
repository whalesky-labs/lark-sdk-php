<?php

declare(strict_types=1);

namespace Lark\Api\Im\Pin;

use Lark\Request\RestRequest;

/**
 * 获取群内 Pin 消息
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ugTN1YjL4UTN24CO1UjN/trouble-shooting/how-to-enable-bot-ability
 */
final class ImV1PinsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/pins';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
