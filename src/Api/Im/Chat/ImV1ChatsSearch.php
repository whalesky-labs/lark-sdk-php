<?php

declare(strict_types=1);

namespace Lark\Api\Im\Chat;

use Lark\Request\RestRequest;

/**
 * 搜索对用户或机器人可见的群列表
 *
 * @see https://open.feishu.cn/document/home/develop-a-bot-in-5-minutes/create-an-app
 */
final class ImV1ChatsSearch extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/chats/search';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
