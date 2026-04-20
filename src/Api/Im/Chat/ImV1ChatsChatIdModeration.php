<?php

declare(strict_types=1);

namespace Lark\Api\Im\Chat;

use Lark\Request\RestRequest;

/**
 * 更新群发言权限
 *
 * @see https://open.feishu.cn/document/uQjL04CN/uYTMuYTMuYTM
 */
final class ImV1ChatsChatIdModeration extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/chats/:chat_id/moderation';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
