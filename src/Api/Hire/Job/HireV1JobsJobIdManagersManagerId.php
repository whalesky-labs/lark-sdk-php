<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Job;

use Lark\Request\RestRequest;

/**
 * 获取职位上的招聘人员信息
 *
 * @see https://feishu.apifox.cn/api-11256993
 */
final class HireV1JobsJobIdManagersManagerId extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/jobs/:job_id/managers/:manager_id';

    protected string $httpMethod = 'GET';
}
