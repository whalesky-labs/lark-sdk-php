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

namespace Lark\Api\Drive\Meta;

use Lark\Request\RestRequest;

/**
 * 获取文档元数据
 *
 * @see https://feishu.apifox.cn/api-58468161
 */
final class DriveV1MetasBatchQuery extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/metas/batch_query';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
