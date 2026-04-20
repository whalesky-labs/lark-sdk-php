<?php

declare(strict_types=1);

namespace Lark\Api\Okr\ProgressRecord;

use Lark\Request\RestRequest;

/**
 * 获取 OKR 进展记录
 *
 * @see https://feishu.apifox.cn/api-60825994
 */
final class OkrV1ProgressRecordsProgressIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/progress_records/:progress_id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
