<?php

declare(strict_types=1);

namespace Lark\Api\Application\App;

use Lark\Request\RestRequest;

/**
 * 获取应用在企业内的可用范围
 *
 * @see https://feishu.apifox.cn/api-9020870
 */
final class ApplicationV2AppVisibility extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v2/app/visibility';

    protected string $httpMethod = 'GET';
}
