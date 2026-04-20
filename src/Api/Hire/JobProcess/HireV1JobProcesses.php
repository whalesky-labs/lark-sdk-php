<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

namespace Lark\Api\Hire\JobProcess;

use Lark\Request\RestRequest;

/**
 * 获取招聘流程信息
 *
 * @see https://feishu.apifox.cn/api-11283356
 */
final class HireV1JobProcesses extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/job_processes';

    protected string $httpMethod = 'GET';
}
