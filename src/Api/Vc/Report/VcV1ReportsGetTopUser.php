<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Report;

use Lark\Request\RestRequest;

/**
 * 获取top用户列表
 *
 * @see https://feishu.apifox.cn/api-9020878
 */
final class VcV1ReportsGetTopUser extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/reports/get_top_user';

    protected string $httpMethod = 'GET';
}
