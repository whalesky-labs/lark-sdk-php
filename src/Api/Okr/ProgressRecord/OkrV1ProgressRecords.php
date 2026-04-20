<?php

declare(strict_types=1);

namespace Lark\Api\Okr\ProgressRecord;

use Lark\Request\RestRequest;

/**
 * 创建 OKR 进展记录
 *
 * @see https://feishu.apifox.cn/api-60821152
 */
final class OkrV1ProgressRecords extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/progress_records';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
