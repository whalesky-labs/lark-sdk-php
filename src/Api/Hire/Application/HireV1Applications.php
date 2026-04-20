<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Application;

use Lark\Request\RestRequest;

/**
 * 创建投递
 *
 * @see https://feishu.apifox.cn/api-11283381
 */
final class HireV1Applications extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/applications';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
