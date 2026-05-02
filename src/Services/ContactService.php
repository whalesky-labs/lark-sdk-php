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

namespace Lark\Services;

use Lark\LarkClient;
use Lark\Services\Contact\CustomAttrResource;
use Lark\Services\Contact\DepartmentResource;
use Lark\Services\Contact\EmployeeTypeEnumResource;
use Lark\Services\Contact\GroupResource;
use Lark\Services\Contact\ScopeResource;
use Lark\Services\Contact\UnitResource;
use Lark\Services\Contact\UserResource;

final class ContactService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function customAttr(): CustomAttrResource
    {
        return new CustomAttrResource($this->client);
    }

    public function department(): DepartmentResource
    {
        return new DepartmentResource($this->client);
    }

    public function employeeTypeEnum(): EmployeeTypeEnumResource
    {
        return new EmployeeTypeEnumResource($this->client);
    }

    public function group(): GroupResource
    {
        return new GroupResource($this->client);
    }

    public function scope(): ScopeResource
    {
        return new ScopeResource($this->client);
    }

    public function unit(): UnitResource
    {
        return new UnitResource($this->client);
    }

    public function user(): UserResource
    {
        return new UserResource($this->client);
    }
}
