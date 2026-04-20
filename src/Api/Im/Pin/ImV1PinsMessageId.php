<?php

declare(strict_types=1);

namespace Lark\Api\Im\Pin;

use Lark\Request\RestRequest;

/**
 * 移除 Pin 消息
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ugTN1YjL4UTN24CO1UjN/trouble-shooting/how-to-enable-bot-ability
 */
final class ImV1PinsMessageId extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/pins/:message_id';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
