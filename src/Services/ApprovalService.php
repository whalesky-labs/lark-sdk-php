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
use Lark\Services\Approval\ApprovalResource;
use Lark\Services\Approval\ExternalApprovalResource;
use Lark\Services\Approval\ExternalInstanceResource;
use Lark\Services\Approval\ExternalTaskResource;
use Lark\Services\Approval\InstanceResource;
use Lark\Services\Approval\MessageResource;
use Lark\Services\Approval\SubscriptionResource;
use Lark\Services\Approval\TaskResource;

final class ApprovalService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function approval(): ApprovalResource
    {
        return new ApprovalResource($this->client);
    }

    public function externalApproval(): ExternalApprovalResource
    {
        return new ExternalApprovalResource($this->client);
    }

    public function externalInstance(): ExternalInstanceResource
    {
        return new ExternalInstanceResource($this->client);
    }

    public function externalTask(): ExternalTaskResource
    {
        return new ExternalTaskResource($this->client);
    }

    public function instance(): InstanceResource
    {
        return new InstanceResource($this->client);
    }

    public function message(): MessageResource
    {
        return new MessageResource($this->client);
    }

    public function subscription(): SubscriptionResource
    {
        return new SubscriptionResource($this->client);
    }

    public function task(): TaskResource
    {
        return new TaskResource($this->client);
    }
}
