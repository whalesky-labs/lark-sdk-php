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

namespace Lark\Api\Contact\Department;

use Lark\Request\RestRequest;

/**
 * 搜索部门
 *
 * @see https://feishu.apifox.cn/api-9021005
 */
final class ContactV3DepartmentsSearch extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/departments/search';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
