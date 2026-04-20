<?php

declare(strict_types=1);

namespace Lark\Api\Im\BatchMessage;

use Lark\Request\RestRequest;

/**
 * 查询批量消息整体进度
 *
 * @see https://open.feishu.cn/document/uAjLw4CM/ukTMukTMukTM/reference/im-v1/batch_message/read_user
 */
final class ImV1BatchMessagesBatchMessageIdGetProgress extends RestRequest
{
    protected string $apiUri = '/open-apis/im/v1/batch_messages/:batch_message_id/get_progress';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
