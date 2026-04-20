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
