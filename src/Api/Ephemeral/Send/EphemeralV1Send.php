<?php

declare(strict_types=1);

namespace Lark\Api\Ephemeral\Send;

use Lark\Request\RestRequest;

/**
 * 发送仅特定人可见的消息卡片
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ugTN1YjL4UTN24CO1UjN/trouble-shooting/how-to-enable-bot-ability
 */
final class EphemeralV1Send extends RestRequest
{
    protected string $apiUri = '/open-apis/ephemeral/v1/send';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
