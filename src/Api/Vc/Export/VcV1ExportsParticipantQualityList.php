<?php

declare(strict_types=1);

namespace Lark\Api\Vc\Export;

use Lark\Request\RestRequest;

/**
 * 导出参会人会议质量数据
 *
 * @see https://feishu.apifox.cn/api-59147304
 */
final class VcV1ExportsParticipantQualityList extends RestRequest
{
    protected string $apiUri = '/open-apis/vc/v1/exports/participant_quality_list';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
