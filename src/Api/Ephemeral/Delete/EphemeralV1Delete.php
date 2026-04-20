<?php

declare(strict_types=1);

namespace Lark\Api\Ephemeral\Delete;

use Lark\Request\RestRequest;

/**
 * 删除仅特定人可见的消息卡片
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN
 */
final class EphemeralV1Delete extends RestRequest
{
    protected string $apiUri = '/open-apis/ephemeral/v1/delete';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
