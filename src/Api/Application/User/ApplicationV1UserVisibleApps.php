<?php

declare(strict_types=1);

namespace Lark\Api\Application\User;

use Lark\Request\RestRequest;

/**
 * 获取用户可用的应用
 *
 * @see https://feishu.apifox.cn/api-9020871
 */
final class ApplicationV1UserVisibleApps extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v1/user/visible_apps';

    protected string $httpMethod = 'GET';
}
