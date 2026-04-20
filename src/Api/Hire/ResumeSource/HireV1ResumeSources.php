<?php

declare(strict_types=1);

namespace Lark\Api\Hire\ResumeSource;

use Lark\Request\RestRequest;

/**
 * 获取简历来源列表
 *
 * @see https://feishu.apifox.cn/api-11270290
 */
final class HireV1ResumeSources extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/resume_sources';

    protected string $httpMethod = 'GET';
}
