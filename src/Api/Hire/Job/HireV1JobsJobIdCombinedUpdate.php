<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Job;

use Lark\Request\RestRequest;

/**
 * 更新职位
 *
 * @see https://feishu.apifox.cn/api-60784875
 */
final class HireV1JobsJobIdCombinedUpdate extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/jobs/:job_id/combined_update';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
