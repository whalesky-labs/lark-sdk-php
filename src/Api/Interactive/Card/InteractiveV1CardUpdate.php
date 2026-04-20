<?php

declare(strict_types=1);

namespace Lark\Api\Interactive\Card;

use Lark\Request\RestRequest;

/**
 * 延时更新消息卡片
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uEjNwUjLxYDM14SM2ATN
 */
final class InteractiveV1CardUpdate extends RestRequest
{
    protected string $apiUri = '/open-apis/interactive/v1/card/update';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
