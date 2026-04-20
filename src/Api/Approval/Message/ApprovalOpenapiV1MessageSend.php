<?php

declare(strict_types=1);

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
