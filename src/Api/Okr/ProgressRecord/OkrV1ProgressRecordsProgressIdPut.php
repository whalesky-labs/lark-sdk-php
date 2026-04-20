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

namespace Lark\Api\Okr\ProgressRecord;

use Lark\Request\RestRequest;

/**
 * 更新 OKR 进展记录
 *
 * @see https://feishu.apifox.cn/api-60825605
 */
final class OkrV1ProgressRecordsProgressIdPut extends RestRequest
{
    protected string $apiUri = '/open-apis/okr/v1/progress_records/:progress_id';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
