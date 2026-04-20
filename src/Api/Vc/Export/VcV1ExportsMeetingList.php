<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Export;

use Lark\Request\RestRequest;

/**
 * 导出会议明细
 *
 * @see https://feishu.apifox.cn/api-59146993
 */
final class VcV1ExportsMeetingList extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/exports/meeting_list';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
