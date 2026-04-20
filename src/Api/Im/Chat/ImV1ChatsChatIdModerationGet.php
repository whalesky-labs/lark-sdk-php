<?php

declare(strict_types=1);

namespace Lark\Api\Im\Chat;

use Lark\Request\RestRequest;

/**
 * 获取群成员发言权限
 *
 * @see https://open.feishu.cn/document/uQjL04CN/uYTMuYTMuYTM
 */
final class ImV1ChatsChatIdModerationGet extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/chats/:chat_id/moderation';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
