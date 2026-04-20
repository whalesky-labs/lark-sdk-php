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

namespace Lark\Api\FaceVerify\QueryAuthResult;

use Lark\Request\RestRequest;

/**
 * 查询人脸认证结果
 *
 * @see https://open.feishu.cn/document/home/user-identity-introduction/how-to-get
 */
final class FaceVerifyV1QueryAuthResult extends RestRequest
{
    protected string $apiUri = '/open-apis/face_verify/v1/query_auth_result';

    protected string $httpMethod = 'GET';
}
