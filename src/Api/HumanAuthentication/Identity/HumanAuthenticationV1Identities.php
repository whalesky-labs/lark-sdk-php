<?php

declare(strict_types=1);

namespace Lark\Api\HumanAuthentication\Identity;

use Lark\Request\RestRequest;

/**
 * 录入身份信息
 *
 * @see https://open.feishu.cn/document/home/user-identity-introduction/how-to-get)）
 */
final class HumanAuthenticationV1Identities extends RestRequest
{
    protected string $apiUri = '/open-apis/human_authentication/v1/identities';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
