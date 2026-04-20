<?php

declare(strict_types=1);

namespace Lark\Api\Im\Chat;

use Lark\Request\RestRequest;

/**
 * 判断用户或机器人是否在群里
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ugTN1YjL4UTN24CO1UjN/trouble-shooting/how-to-enable-bot-ability
 */
final class ImV1ChatsChatIdMembersIsInChat extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/chats/:chat_id/members/is_in_chat';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
