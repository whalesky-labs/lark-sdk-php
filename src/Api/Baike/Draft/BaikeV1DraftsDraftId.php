<?php

declare(strict_types=1);

namespace Lark\Api\Baike\Draft;

use Lark\Request\RestRequest;

/**
 * 更新草稿
 *
 * @see https://feishu.apifox.cn/api-11318520
 */
final class BaikeV1DraftsDraftId extends RestRequest
{
    protected string $apiUri = '/open-apis/baike/v1/drafts/:draft_id';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
