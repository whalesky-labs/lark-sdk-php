<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Job;

use Lark\Request\RestRequest;

/**
 * 获取职位信息
 *
 * @see https://feishu.apifox.cn/api-11256766
 */
final class HireV1JobsJobId extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/jobs/:job_id';

    protected string $httpMethod = 'GET';
}
