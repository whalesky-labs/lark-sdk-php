<?php

declare(strict_types=1);

namespace Lark\Api\Im\Message;

use Lark\Request\RestRequest;

/**
 * 撤回消息
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ugTN1YjL4UTN24CO1UjN/trouble-shooting/how-to-enable-bot-ability
 */
final class ImV1MessagesMessageId extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/messages/:message_id';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
