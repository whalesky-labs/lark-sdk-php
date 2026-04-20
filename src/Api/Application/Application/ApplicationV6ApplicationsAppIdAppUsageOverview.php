<?php

declare(strict_types=1);

namespace Lark\Api\Application\Application;

use Lark\Request\RestRequest;

/**
 * 获取应用使用概览
 *
 * @see https://feishu.apifox.cn/api-60200608
 */
final class ApplicationV6ApplicationsAppIdAppUsageOverview extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v6/applications/:app_id/app_usage/overview';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
