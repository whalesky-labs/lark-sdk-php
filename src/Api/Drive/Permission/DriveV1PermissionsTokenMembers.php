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

namespace Lark\Api\Drive\Permission;

use Lark\Request\RestRequest;

/**
 * 获取协作者列表（新版本）
 *
 * @see https://feishu.apifox.cn/api-58492228
 */
final class DriveV1PermissionsTokenMembers extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/permissions/:token/members';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
