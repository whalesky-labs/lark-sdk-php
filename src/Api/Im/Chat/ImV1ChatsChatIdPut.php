<?php

declare(strict_types=1);

namespace Lark\Api\Im\Chat;

use Lark\Request\RestRequest;

/**
 * 更新群信息
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ugTN1YjL4UTN24CO1UjN/trouble-shooting/how-to-enable-bot-ability
 */
final class ImV1ChatsChatIdPut extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/chats/:chat_id';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
