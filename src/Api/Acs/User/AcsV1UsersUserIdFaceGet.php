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

namespace Lark\Api\Acs\User;

use Lark\Request\RestRequest;

/**
 * 下载人脸图片
 *
 * @see https://feishu.apifox.cn/api-9020753
 */
final class AcsV1UsersUserIdFaceGet extends RestRequest
{
    protected string $apiUri = '/open-apis/acs/v1/users/:user_id/face';

    protected string $httpMethod = 'GET';
}
