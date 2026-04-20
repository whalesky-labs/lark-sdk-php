<?php

declare(strict_types=1);

namespace Lark\Api\Acs\Device;

use Lark\Request\RestRequest;

/**
 * 获取设备列表
 *
 * @see https://feishu.apifox.cn/api-9020749
 */
final class AcsV1Devices extends RestRequest
{
    protected string $apiUri = '/open-apis/acs/v1/devices';

    protected string $httpMethod = 'GET';
}
