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
use Lark\Services\Application\ApplicationResource;
use Lark\Services\Application\AppRecommendRuleResource;
use Lark\Services\Application\AppResource;
use Lark\Services\Application\IsUserAdminResource;
use Lark\Services\Application\UserResource;

final class ApplicationService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function app(): AppResource
    {
        return new AppResource($this->client);
    }

    public function appRecommendRule(): AppRecommendRuleResource
    {
        return new AppRecommendRuleResource($this->client);
    }

    public function application(): ApplicationResource
    {
        return new ApplicationResource($this->client);
    }

    public function isUserAdmin(): IsUserAdminResource
    {
        return new IsUserAdminResource($this->client);
    }

    public function user(): UserResource
    {
        return new UserResource($this->client);
    }
}
