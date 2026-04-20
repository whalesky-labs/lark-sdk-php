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

namespace Lark\Api\Ehr\Employee;

use Lark\Request\RestRequest;

/**
 * 批量获取员工花名册信息
 *
 * @see https://open.feishu.cn/document/home/user-identity-introduction/introduction)
 */
final class EhrV1Employees extends RestRequest
{
    protected string $apiUri = '/open-apis/ehr/v1/employees';

    protected string $httpMethod = 'GET';
}
