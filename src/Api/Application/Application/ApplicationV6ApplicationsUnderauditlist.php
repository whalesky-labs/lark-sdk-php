<?php

declare(strict_types=1);

namespace Lark\Api\Application\Application;

use Lark\Request\RestRequest;

/**
 * 查看待审核的应用列表
 *
 * @see https://feishu.apifox.cn/api-11245821
 */
final class ApplicationV6ApplicationsUnderauditlist extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v6/applications/underauditlist';

    protected string $httpMethod = 'GET';
}
