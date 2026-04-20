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

namespace Lark\Api\Drive\ImportTask;

use Lark\Request\RestRequest;

/**
 * 查询导入结果
 *
 * @see https://feishu.apifox.cn/api-9851729
 */
final class DriveV1ImportTasksTicket extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/import_tasks/:ticket';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
