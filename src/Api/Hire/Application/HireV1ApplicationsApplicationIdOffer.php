<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Application;

use Lark\Request\RestRequest;

/**
 * 获取 Offer 信息
 *
 * @see https://feishu.apifox.cn/api-11291838
 */
final class HireV1ApplicationsApplicationIdOffer extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/applications/:application_id/offer';

    protected string $httpMethod = 'GET';
}
