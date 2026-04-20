<?php

declare(strict_types=1);

namespace Lark\Api\Application\AppRecommendRule;

use Lark\Request\RestRequest;

/**
 * 获取当前设置的推荐规则列表
 *
 * @see https://feishu.apifox.cn/api-60857299
 */
final class ApplicationV6AppRecommendRules extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v6/app_recommend_rules';

    protected string $httpMethod = 'GET';
}
