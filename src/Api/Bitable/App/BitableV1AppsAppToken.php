<?php

declare(strict_types=1);

namespace Lark\Api\Bitable\App;

use Lark\Request\RestRequest;

/**
 * 获取多维表格元数据
 *
 * @see https://feishu.apifox.cn/api-10753711
 */
final class BitableV1AppsAppToken extends RestRequest
{
    protected string $apiUri = '/open-apis/bitable/v1/apps/:app_token';

    protected string $httpMethod = 'GET';
}
