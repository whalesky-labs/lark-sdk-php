<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Talent;

use Lark\Request\RestRequest;

/**
 * 通过手机号或邮箱获取人才 ID
 *
 * @see https://feishu.apifox.cn/api-60797756
 */
final class HireV1TalentsBatchGetId extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/talents/batch_get_id';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
