<?php

declare(strict_types=1);

namespace Lark\Api\Vc\ScopeConfig;

use Lark\Request\RestRequest;

/**
 * 设置会议室配置
 *
 * @see https://feishu.apifox.cn/api-59160954
 */
final class VcV1ScopeConfigPost extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/scope_config';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
