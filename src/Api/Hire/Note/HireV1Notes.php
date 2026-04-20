<?php

declare(strict_types=1);

namespace Lark\Api\Hire\Note;

use Lark\Request\RestRequest;

/**
 * 创建备注
 *
 * @see https://feishu.apifox.cn/api-11271808
 */
final class HireV1Notes extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/notes';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
