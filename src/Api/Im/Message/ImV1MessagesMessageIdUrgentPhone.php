<?php

declare(strict_types=1);

namespace Lark\Api\Im\Message;

use Lark\Request\RestRequest;

/**
 * 发送电话加急
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ugTN1YjL4UTN24CO1UjN/trouble-shooting/how-to-enable-bot-ability
 */
final class ImV1MessagesMessageIdUrgentPhone extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/messages/:message_id/urgent_phone';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
