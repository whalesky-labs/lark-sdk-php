<?php

declare(strict_types=1);

namespace Lark\Api\Im\Chat;

use Lark\Request\RestRequest;

/**
 * 创建群
 *
 * @see https://open.feishu.cn/document/home/develop-a-bot-in-5-minutes/create-an-app
 */
final class ImV1Chats extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/chats';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
