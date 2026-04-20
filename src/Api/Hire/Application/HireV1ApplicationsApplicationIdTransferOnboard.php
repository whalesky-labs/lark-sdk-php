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

namespace Lark\Api\Hire\Application;

use Lark\Request\RestRequest;

/**
 * 操作候选人入职
 *
 * @see https://feishu.apifox.cn/api-11285964
 */
final class HireV1ApplicationsApplicationIdTransferOnboard extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/applications/:application_id/transfer_onboard';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
