<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 获取订阅状态
 *
 * @see https://feishu.apifox.cn/api-58968650
 */
final class DriveV1FilesFileTokenSubscriptionsSubscriptionId extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/subscriptions/:subscription_id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
