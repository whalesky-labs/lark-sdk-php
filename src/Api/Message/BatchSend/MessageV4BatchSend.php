<?php

declare(strict_types=1);

namespace Lark\Api\Message\BatchSend;

use Lark\Request\RestRequest;

/**
 * 批量发送消息
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ugTN1YjL4UTN24CO1UjN/trouble-shooting/how-to-enable-bot-ability
 */
final class MessageV4BatchSend extends RestRequest
{
    protected string $apiUri = '/open-apis/message/v4/batch_send/';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
