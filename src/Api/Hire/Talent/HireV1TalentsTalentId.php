<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Talent;

use Lark\Request\RestRequest;

/**
 * 获取人才信息
 *
 * @see https://feishu.apifox.cn/api-11258084
 */
final class HireV1TalentsTalentId extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/talents/:talent_id';

    protected string $httpMethod = 'GET';
}
