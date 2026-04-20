<?php

declare(strict_types=1);

namespace Lark\Api\Passport\Session;

use Lark\Request\RestRequest;

/**
 * 批量获取脱敏的用户登录信息
 *
 * @see https://feishu.apifox.cn/api-58167779
 */
final class PassportV1SessionsQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/passport/v1/sessions/query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
