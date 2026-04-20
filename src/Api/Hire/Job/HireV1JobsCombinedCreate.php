<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Job;

use Lark\Request\RestRequest;

/**
 * 新建职位
 *
 * @see https://feishu.apifox.cn/api-60292816
 */
final class HireV1JobsCombinedCreate extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/jobs/combined_create';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
