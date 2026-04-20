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

namespace Lark\Api\Contact\Unit;

use Lark\Request\RestRequest;

/**
 * 获取单位绑定的部门列表
 *
 * @see https://feishu.apifox.cn/api-9250341
 */
final class ContactV3UnitListDepartment extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/unit/list_department';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
