<?php

declare(strict_types=1);

namespace Lark\Api\Im\BatchMessage;

use Lark\Request\RestRequest;

/**
 * 批量撤回消息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ucDO1EjL3gTNx4yN4UTM
 */
final class ImV1BatchMessagesBatchMessageId extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/batch_messages/:batch_message_id';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
