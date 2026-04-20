<?php

declare(strict_types=1);

namespace Lark\Api\Okr\Period;

use Lark\Request\RestRequest;

/**
 * 获取OKR周期列表
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uQjN3QjL0YzN04CN2cDN
 */
final class OkrV1Periods extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/periods';

    protected string $httpMethod = 'GET';
}
