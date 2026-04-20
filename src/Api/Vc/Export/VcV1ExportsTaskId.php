<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Export;

use Lark\Request\RestRequest;

/**
 * 查询导出任务结果
 *
 * @see https://feishu.apifox.cn/api-59147598
 */
final class VcV1ExportsTaskId extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/exports/:task_id';

    protected string $httpMethod = 'GET';
}
