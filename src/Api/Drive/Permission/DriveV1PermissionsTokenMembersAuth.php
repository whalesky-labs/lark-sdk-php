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
 * 判断当前用户是否有某权限
 *
 * @see https://feishu.apifox.cn/api-58491977
 */
final class DriveV1PermissionsTokenMembersAuth extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/permissions/:token/members/auth';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
