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

namespace Lark\Api\Hire\Referral;

use Lark\Request\RestRequest;

/**
 * 获取内推信息
 *
 * @see https://feishu.apifox.cn/api-11282781
 */
final class HireV1ReferralsGetByApplication extends RestRequest
{
    protected string $apiUri = '/open-apis/hire/v1/referrals/get_by_application';

    protected string $httpMethod = 'GET';
}
