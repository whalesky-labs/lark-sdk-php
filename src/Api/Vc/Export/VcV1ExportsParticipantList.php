<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Export;

use Lark\Request\RestRequest;

/**
 * 导出参会人明细
 *
 * @see https://feishu.apifox.cn/api-59147156
 */
final class VcV1ExportsParticipantList extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/exports/participant_list';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
