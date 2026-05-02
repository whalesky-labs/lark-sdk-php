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
use Lark\Services\Helpdesk\AgentEmailResource;
use Lark\Services\Helpdesk\AgentResource;
use Lark\Services\Helpdesk\AgentScheduleResource;
use Lark\Services\Helpdesk\AgentSkillResource;
use Lark\Services\Helpdesk\AgentSkillRuleResource;
use Lark\Services\Helpdesk\CategoryResource;
use Lark\Services\Helpdesk\CustomizedFieldResource;
use Lark\Services\Helpdesk\EventResource;
use Lark\Services\Helpdesk\FaqResource;
use Lark\Services\Helpdesk\MessageResource;
use Lark\Services\Helpdesk\NotificationResource;
use Lark\Services\Helpdesk\StartServiceResource;
use Lark\Services\Helpdesk\TicketCustomizedFieldResource;
use Lark\Services\Helpdesk\TicketImageResource;
use Lark\Services\Helpdesk\TicketResource;

final class HelpdeskService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function agent(): AgentResource
    {
        return new AgentResource($this->client);
    }

    public function agentEmail(): AgentEmailResource
    {
        return new AgentEmailResource($this->client);
    }

    public function agentSchedule(): AgentScheduleResource
    {
        return new AgentScheduleResource($this->client);
    }

    public function agentSkill(): AgentSkillResource
    {
        return new AgentSkillResource($this->client);
    }

    public function agentSkillRule(): AgentSkillRuleResource
    {
        return new AgentSkillRuleResource($this->client);
    }

    public function category(): CategoryResource
    {
        return new CategoryResource($this->client);
    }

    public function customizedField(): CustomizedFieldResource
    {
        return new CustomizedFieldResource($this->client);
    }

    public function event(): EventResource
    {
        return new EventResource($this->client);
    }

    public function faq(): FaqResource
    {
        return new FaqResource($this->client);
    }

    public function message(): MessageResource
    {
        return new MessageResource($this->client);
    }

    public function notification(): NotificationResource
    {
        return new NotificationResource($this->client);
    }

    public function startService(): StartServiceResource
    {
        return new StartServiceResource($this->client);
    }

    public function ticket(): TicketResource
    {
        return new TicketResource($this->client);
    }

    public function ticketCustomizedField(): TicketCustomizedFieldResource
    {
        return new TicketCustomizedFieldResource($this->client);
    }

    public function ticketImage(): TicketImageResource
    {
        return new TicketImageResource($this->client);
    }
}
