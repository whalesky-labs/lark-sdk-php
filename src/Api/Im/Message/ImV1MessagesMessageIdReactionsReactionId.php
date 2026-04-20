<?php

declare(strict_types=1);

namespace Lark\Api\Im\Message;

use Lark\Request\RestRequest;

/**
 * 删除消息表情回复
 *
 * @see https://open.feishu.cn/document/home/develop-a-bot-in-5-minutes/create-an-app
 */
final class ImV1MessagesMessageIdReactionsReactionId extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/messages/:message_id/reactions/:reaction_id';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
