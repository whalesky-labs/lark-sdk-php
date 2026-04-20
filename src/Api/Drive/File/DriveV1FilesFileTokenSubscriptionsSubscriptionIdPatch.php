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
 * 更新订阅状态
 *
 * @see https://feishu.apifox.cn/api-58969383
 */
final class DriveV1FilesFileTokenSubscriptionsSubscriptionIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/v1/files/:file_token/subscriptions/:subscription_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
