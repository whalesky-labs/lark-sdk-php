<?php

declare(strict_types=1);

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
