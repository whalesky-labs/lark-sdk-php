<?php

declare(strict_types=1);

namespace Lark\Api\Okr\Okr;

use Lark\Request\RestRequest;

/**
 * 批量获取OKR
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uQjN3QjL0YzN04CN2cDN
 */
final class OkrV1OkrsBatchGet extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/okrs/batch_get';

    protected string $httpMethod = 'GET';
}
