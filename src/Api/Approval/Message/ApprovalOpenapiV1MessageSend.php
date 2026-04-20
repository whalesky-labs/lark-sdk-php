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

namespace Lark\Api\Approval\Message;

use Lark\Request\RestRequest;

/**
 * 发送审批 Bot 消息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uADOwUjLwgDM14CM4ATN)，i18n
 */
final class ApprovalOpenapiV1MessageSend extends RestRequest
{
    protected string $apiUri = '/open-apis/approval/openapi/v1/message/send';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
