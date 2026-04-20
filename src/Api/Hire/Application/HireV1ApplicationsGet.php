<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Application;

use Lark\Request\RestRequest;

/**
 * 获取投递列表
 *
 * @see https://feishu.apifox.cn/api-11283553
 */
final class HireV1ApplicationsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/applications';

    protected string $httpMethod = 'GET';
}
