<?php

declare(strict_types=1);

namespace Lark\Api\Acs\User;

use Lark\Request\RestRequest;

/**
 * 上传人脸图片
 *
 * @see https://feishu.apifox.cn/api-9020752
 */
final class AcsV1UsersUserIdFace extends RestRequest
{
    protected string $apiUri = '/open-apis/acs/v1/users/:user_id/face';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
