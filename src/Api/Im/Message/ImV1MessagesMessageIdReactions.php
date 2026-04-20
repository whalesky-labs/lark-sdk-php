<?php

declare(strict_types=1);

namespace Lark\Api\Im\Message;

use Lark\Request\RestRequest;

/**
 * 添加消息表情回复
 *
 * @see https://open.feishu.cn/document/home/develop-a-bot-in-5-minutes/create-an-app
 */
final class ImV1MessagesMessageIdReactions extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/messages/:message_id/reactions';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
