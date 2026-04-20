<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 列出仪表盘
 *
 * @see https://feishu.apifox.cn/api-58954319
 */
final class BitableV1AppsAppTokenDashboards extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token/dashboards';

    protected string $httpMethod = 'GET';
}
