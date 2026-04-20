<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

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
