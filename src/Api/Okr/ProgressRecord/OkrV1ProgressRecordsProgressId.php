<?php

declare(strict_types=1);

namespace Lark\Api\Okr\ProgressRecord;

use Lark\Request\RestRequest;

/**
 * 删除 OKR 进展记录
 *
 * @see https://feishu.apifox.cn/api-60821559
 */
final class OkrV1ProgressRecordsProgressId extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/progress_records/:progress_id';

    protected string $httpMethod = 'DELETE';
}
