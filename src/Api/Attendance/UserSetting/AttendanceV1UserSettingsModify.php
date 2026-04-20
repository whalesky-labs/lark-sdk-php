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

namespace Lark\Api\Attendance\UserSetting;

use Lark\Request\RestRequest;

/**
 * 修改用户人脸识别信息
 *
 * @see https://feishu.apifox.cn/api-59173689
 */
final class AttendanceV1UserSettingsModify extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/user_settings/modify';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
