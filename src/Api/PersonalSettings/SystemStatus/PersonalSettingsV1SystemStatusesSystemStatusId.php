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

namespace Lark\Api\PersonalSettings\SystemStatus;

use Lark\Request\RestRequest;

/**
 * 删除系统状态
 *
 * @see https://feishu.apifox.cn/api-60217745
 */
final class PersonalSettingsV1SystemStatusesSystemStatusId extends RestRequest
{
    protected string $apiUri = '/open-apis/personal_settings/v1/system_statuses/:system_status_id';

    protected string $httpMethod = 'DELETE';
}
