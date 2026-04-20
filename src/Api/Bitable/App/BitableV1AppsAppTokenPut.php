<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 更新多维表格元数据
 *
 * @see https://feishu.apifox.cn/api-58952482
 */
final class BitableV1AppsAppTokenPut extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
