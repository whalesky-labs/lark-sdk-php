<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Job;

use Lark\Request\RestRequest;

/**
 * 获取职位设置
 *
 * @see https://feishu.apifox.cn/api-60786416
 */
final class HireV1JobsJobIdConfig extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/jobs/:job_id/config';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
