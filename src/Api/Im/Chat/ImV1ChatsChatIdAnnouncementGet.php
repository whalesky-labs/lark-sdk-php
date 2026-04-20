<?php

declare(strict_types=1);

namespace Lark\Api\Im\Chat;

use Lark\Request\RestRequest;

/**
 * 获取群公告信息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uAzM5YjLwMTO24CMzkjN
 */
final class ImV1ChatsChatIdAnnouncementGet extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/chats/:chat_id/announcement';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
