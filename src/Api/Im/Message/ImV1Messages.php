<?php

declare(strict_types=1);

namespace Lark\Api\Im\Message;

use Lark\Request\RestRequest;

/**
 * 发送消息
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/im-v1/message/create
 */
final class ImV1Messages extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/messages';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
