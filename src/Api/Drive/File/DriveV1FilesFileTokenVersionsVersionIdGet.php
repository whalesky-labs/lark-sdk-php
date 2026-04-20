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

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 获取文档版本
 *
 * @see https://feishu.apifox.cn/api-58486019
 */
final class DriveV1FilesFileTokenVersionsVersionIdGet extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/versions/:version_id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
