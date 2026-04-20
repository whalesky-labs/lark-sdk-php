<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

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
