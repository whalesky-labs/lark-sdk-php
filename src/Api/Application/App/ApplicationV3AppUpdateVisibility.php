<?php

declare(strict_types=1);

namespace Lark\Api\Application\App;

use Lark\Request\RestRequest;

/**
 * 更新应用可用范围
 *
 * @see https://feishu.apifox.cn/api-9020873
 */
final class ApplicationV3AppUpdateVisibility extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v3/app/update_visibility';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
